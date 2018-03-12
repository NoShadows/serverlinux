<script type="text/javascript" src="js/modules/extras.js"></script>
<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) Copyright (C) 2008 - 2013 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */
require('modules/update/unzip.php');
require('modules/modulemanager/module_handling.php');

function rmdir_recurse($path) {
    $path = rtrim($path, '/').'/';
    $handle = opendir($path);
    while(false !== ($file = readdir($handle))) {
        if($file != '.' and $file != '..' ) {
            $fullpath = $path.$file;
            if(is_dir($fullpath)) rmdir_recurse($fullpath); else unlink($fullpath);
        }
    }
    closedir($handle);
    rmdir($path);
}

function getMyFile($url,$destination)
{
	$result = file_get_contents($url);
	if(!$result)
		return $result;
	return file_put_contents($destination, $result);
}

function installUpdate($info, $base_dir)
{
	$tmp = get_temp_dir(dirname(__FILE__));
	$temp_dwl = $tmp . DIRECTORY_SEPARATOR . $info['file'];
	$_SESSION['link'] = $info['link'];
	if(!getMyFile($info['link'],$temp_dwl))
	{
		echo get_lang_f('unable_download',$info['title'])."\n";
		return;
	}
		
	// Set default values for file checkings before installing
	$not_writable = can_not_update_non_writable_files ." :\n";
	$filename = "";
	$overwritten = 0;
	$new = 0;
	$all_writable = TRUE;
	$filelist = "";
	$overwritten_files = "";
	$new_files = "";
	
	$temp_dir = $tmp . DIRECTORY_SEPARATOR . "OGP_Extras";
	if( !file_exists($temp_dir) )
		mkdir($temp_dir, 0775);
	
	$result = extractZip( $temp_dwl, $temp_dir . DIRECTORY_SEPARATOR, $info['remove_path'] );
		
	if ( is_array($result['extracted_files']) and count($result['extracted_files']) > 0 )
	{
		$nfo_file = DATA_PATH . str_replace(' ','_',$info['title']) . ".nfo";
		$install_nfo = $info['timestamp']."\n$nfo_file\n";
		// Check file by file if already exists, if it matches, compares both files 
		// looking for changes determining if the file needs to be updated.
		// Also determines if the file is writable
		$filelist = array();
		$i = 0;
		foreach( $result['extracted_files'] as $file )
		{
			if( DIRECTORY_SEPARATOR == '\\')
				$filename = str_replace('/', '\\', $file['filename']);
			else
				$filename = $file['filename'];
			
			$filename = preg_replace( "/".preg_quote($info['remove_path'])."/", "", $filename);
			$install_nfo .= realpath($base_dir) . $filename . "\n";
			$temp_file = $temp_dir . DIRECTORY_SEPARATOR . $filename;
			$web_file = $base_dir . $filename;
			
			if( file_exists( $web_file ) )
			{
				$temp = file_get_contents($temp_file);
				$web = file_get_contents($web_file);
				
				if( $temp != $web )
				{
					if( !is_writable( $web_file ) )
					{
						if ( ! @chmod( $web_file, 0644 ) )
						{
							$all_writable = FALSE;
							$not_writable .= $web_file."\n";
						}
						else
						{
							$filelist[$i] = $file['filename'];
							$i++;
							$overwritten_files .= $filename . "\n";
							$overwritten++;
						}
					}
					else
					{
						$filelist[$i] = $file['filename'];
						$i++;
						$overwritten_files .= $filename . "\n";
						$overwritten++;
					}
				}
			}
			else
			{	
				$filelist[$i] = $file['filename'];
				$i++;
				$new_files .= $filename . "\n";
				$new++;
			}
		}
	}
	else
	{
		echo $result;
		// Remove the downloaded package
		if( file_exists( $temp_dwl ) )
			unlink( $temp_dwl );
		return FALSE;
	}
	
	// Once checkings are done the temp folder is removed
	if( file_exists( $temp_dir ) )
	{
		rmdir_recurse( $temp_dir );
	}
	
	if( $all_writable )
	{
		// Extract the files that are set in $filelist, to the folder at $base_dir.
		$result = extractZip( $temp_dwl, $base_dir, $info['remove_path'], '', $filelist );
		
		if( is_array( $result['extracted_files'] ) )
		{
			// Updated files
			if ( $overwritten > 0 )
			{
				echo get_lang_f('files_overwritten',$overwritten).":\n".$overwritten_files;
			}
			
			if ( $new > 0 )
			{
				echo get_lang_f('new_files',$new).":\n".$new_files;
			}
						
			// Add install.nfo file to the module/theme directory so we can remove the installed files later and check the installed files timestamp.
			file_put_contents($nfo_file, $install_nfo);
			// Remove the downloaded package
			if( file_exists( $temp_dwl ) )
				unlink( $temp_dwl );
			return TRUE;
		}
		else
		{
			// Remove the downloaded package
			if( file_exists( $temp_dwl ) )
				unlink( $temp_dwl );
			return FALSE;
		}
	}
	else
	{
		echo $info['title'].":\n$not_writable";
		// Remove the downloaded package
		if( file_exists( $temp_dwl ) )
			unlink( $temp_dwl );
		return FALSE;
	}
}

function rglob($pattern, $flags = 0) {
    $files = glob($pattern, $flags); 
    foreach (glob(dirname($pattern).'/*', GLOB_ONLYDIR|GLOB_NOSORT) as $dir) {
        $files = array_merge($files, rglob($dir.'/'.basename($pattern), $flags));
    }
    return $files;
}

function deeperPathFirst($a, $b)
{
	$al = count(explode(DIRECTORY_SEPARATOR,$a));
	$bl = count(explode(DIRECTORY_SEPARATOR,$b));
	if ($al == $bl) {
		return strcmp($a,$b);
	}
	return ($al > $bl) ? -1 : +1;
}
 
function exec_ogp_module() 
{
	set_time_limit(0);
	$baseDir = str_replace( "modules" . DIRECTORY_SEPARATOR . $_GET['m'],"",dirname(__FILE__) );
	define('DATA_PATH', realpath('modules/'.$_GET['m'].'/') . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR);
	
	if(!file_exists(DATA_PATH))
	{
		if(!mkdir(DATA_PATH))
		{
			print_failure("Need create folder: " . DATA_PATH . ' <br>But ' . dirname(DATA_PATH) . ' is not writable.<br>The command: <pre>chmod -R ' . dirname(DATA_PATH) . '</pre> would fix it.');
			return;
		}
		
		$back_compatibility = [ 'Util',
								'RCON',
								'DSi',
								'Cron',
								'LGSL_with_Img_Mod',
								'Simple-billing',
								'Support',
								'TeamSpeak3',
								'DarkNature',
								'expand-soft',
								'Katiuska',
								'mobile',
								'Light',
								'Silver',
								'Soft',
								'Uprise' ];
		
		$installed = rglob('*/*/install.nfo');
		
		foreach($installed as $nfo)
		{
			$nfo_new = preg_replace('#^([m|t]{1})(odule|heme){1}s/([^?/]+)/install.nfo#','\3',$nfo);
			#echo $nfo_new.'<br>';
			$matches = preg_grep('#'.preg_quote($nfo_new).'#i',$back_compatibility);	
			sort($matches);
			if($nfo_new == 'fastdl')
				$matches[0] = 'Fast_Download';
			if(isset($matches[0]))
			{
				#echo DATA_PATH.$matches[0].'.nfo<br>';
				file_put_contents(DATA_PATH.$matches[0].'.nfo', file_get_contents($nfo));
			}
			unlink($nfo);
		}
	}
	#return;
	define('REPO_FILE', DATA_PATH . "repos");
	define('URL', 'https://api.github.com/orgs/OpenGamePanel/repos'); // Returns detailed information of all repositories, and urls for more detailed informations about. Nice API GitHub! :)
	if(!file_exists(REPO_FILE) or isset($_GET['searchForUpdates']) or isset($_POST['update']))
	{
		# Without this $context the file_get_contents function was returning HTTP/1.0 403 Forbidden
		# Thanks: https://github.com/philsturgeon/codeigniter-oauth2/issues/57#issuecomment-29306192 
		$options  = array('http' => array('user_agent'=> $_SERVER['HTTP_USER_AGENT']));
		$context  = stream_context_create($options);
		$response = file_get_contents(URL, false, $context);
		file_put_contents(REPO_FILE,$response);
	}
	else
	{
		$response = file_get_contents(REPO_FILE);
	}

	# Converting json string to array
	# http://php.net/manual/es/function.json-decode.php mixed json_decode ( string $json [, bool $assoc = false [, int $depth = 512 [, int $options = 0 ]]] ) 
	# *options - Bitmask of JSON decode options. Currently only JSON_BIGINT_AS_STRING is supported (default is to cast large integers as floats)
	$repos_info_array = json_decode($response, true);
	# Checking for contents while debbuging
	/* echo "<xmp>";
	print_r($repos_info_array);
	echo "</xmp>"; */

	if(isset($_POST['remove']))
	{
		$install_nfo = DATA_PATH . str_replace(' ','_',$_POST['folder']) . ".nfo";
		if( file_exists($install_nfo) )
		{
			$lines = file($install_nfo);
			unset($lines[0]);// timestamp
			unset($lines[1]);// nfo file
			usort($lines, "deeperPathFirst");
			foreach($lines as $file)
			{
				$file = trim($file);
				if(file_exists($file))
				{
					unlink($file);
					$parent_directory = dirname($file);
					while(count(scandir($parent_directory)) == 2)
					{							
						if(realpath($parent_directory) == realpath($baseDir))
							break;						
						if(is_writable($parent_directory))
							rmdir($parent_directory);
						else
							break;
						$parent_directory = dirname($parent_directory);
					}
				}
			}
			unlink($install_nfo);
		}
		return;
	}
	
	$m = 0;
	$modules = array();
	$t = 0;
	$themes = array();
	foreach($repos_info_array as $key => $repository)
	{
		if(preg_match('/^(OGP-Website|OGP-Agent-Linux|OGP-Agent-Windows)$/',$repository['name']))
			continue;
		
		$REMOTE_REPO_FILE = 'https://github.com/OpenGamePanel/'.$repository['name'].'/commits/master.atom';
		$LOCAL_REPO_FILE = DATA_PATH . $repository['name'] . '.atom';
		if(!file_exists($LOCAL_REPO_FILE) OR (isset($_GET['searchForUpdates']) and $_GET['searchForUpdates'] == $repository['name']) OR isset($_POST['update']))
		{
			$used_file = $REMOTE_REPO_FILE;
			$contents = file_get_contents($used_file);
			if(file_put_contents($LOCAL_REPO_FILE, $contents))
				touch($LOCAL_REPO_FILE);
		}
		else
		{
			$used_file = $LOCAL_REPO_FILE;
			$contents = file_get_contents($used_file);
		}
		
		if( ! $contents )
		{
			print_failure('Unable to get contents from : ' . $used_file);
			continue;
		}
		$feedXml = new SimpleXMLElement($contents, LIBXML_NOCDATA);
		$seed = basename(  (string) $feedXml->entry[0]->link['href'] );
		/* echo "<xmp>";
		print_r($feedXml);
		echo "</xmp>"; */
		if($seed)
		{
			if(preg_match("/^Module-/",$repository['name']))
			{
				$module_title = preg_replace(array("/^Module-/i","/_/"),array(""," "),$repository['name']);
				$modules[$m]['title'] = $module_title;
				$modules[$m]['reponame'] = $repository['name'];
				$modules[$m]['file'] = $seed.'.zip';
				$modules[$m]['link'] = 'https://github.com/OpenGamePanel/'.$repository['name'].'/archive/'.$seed.'.zip';
				$modules[$m]['date'] = (string) $feedXml->entry[0]->updated;
				$modules[$m]['timestamp'] = strtotime((string) $feedXml->entry[0]->updated);
				$modules[$m]['remove_path'] = $repository['name']."-".$seed;
				$m++;
			}
			if(preg_match("/^Theme-/",$repository['name']))
			{
				$theme_title = preg_replace("/Theme-/i","",$repository['name']);
				$themes[$t]['title'] = $theme_title;
				$themes[$t]['reponame'] = $repository['name'];
				$themes[$t]['file'] = $seed.'.zip';
				$themes[$t]['link'] = 'https://github.com/OpenGamePanel/'.$repository['name'].'/archive/'.$seed.'.zip';
				$themes[$t]['date'] = (string) $feedXml->entry[0]->updated;
				$themes[$t]['timestamp'] = strtotime((string) $feedXml->entry[0]->updated);
				$themes[$t]['remove_path'] = $repository['name']."-".$seed;
				$t++;
			}
		}
	}
		
	global $db;
	$installed_modules = $db->getInstalledModules();
	
	if(isset($_POST['update']))
	{
		$baseDir = str_replace( "modules" . DIRECTORY_SEPARATOR . $_GET['m'],"",dirname(__FILE__) );
		$uMF = array();
		$tmpdir = get_temp_dir(dirname(__FILE__));
		if( !is_writable( $tmpdir ) )
		{
			echo get_lang_f('temp_folder_not_writable', $tmpdir);
			return;
		}
		foreach($_POST as $key => $value)
		{
			if($key == 'update')continue;

			if($key == 'module')
			{
				foreach($value as $m)
				{
					if(installUpdate($modules[$m], $baseDir))
					{
						$install_nfo = DATA_PATH . str_replace(' ','_',$modules[$m]['title']) . ".nfo";
						$nfo = file_get_contents($install_nfo);
						$modules_dir_preg = preg_quote(realpath('modules') . DIRECTORY_SEPARATOR);
						$modulephp_preg = preg_quote(DIRECTORY_SEPARATOR . 'module.php');
						$preg = '#'.$modules_dir_preg.'(.*)'.$modulephp_preg.'#';
						if(preg_match($preg, $nfo, $matches))
							$uMF[] = $matches[1];
					}
				}	
			}
			if($key == 'theme')
			{
				foreach($value as $t)
					installUpdate($themes[$t], $baseDir);
			}
		}
		
		if(isset($_POST['module']))
		{
			foreach ( $installed_modules as $installed_module )
			{
				if(in_array($installed_module['folder'],$uMF))
				{
					update_module($db,$installed_module['id'],$installed_module['folder']);
					echo "\n";
				}
			}
		}
		return;
	}
	
	echo "<h2>".extras."</h2>";
		
	echo "<table style=\"width:100%;\">";

	echo "<tr><td style=\"width:50%;\">";
	# MODULES
	echo "<div class=\"dragbox bloc rounded\" style=\"margin:1%;\">".
		 "<h4>".extra_modules."</h4>".
		 "<div class=\"dragbox-content\" >";
	
	foreach ( $installed_modules as $installed_module )
	{
		$folder = $installed_module['folder'];
		$installed_modules_by_folder[$folder] = $installed_module['id'];
	}
	
	foreach($modules as $key => $module)
	{
		$local_repo_file = DATA_PATH . $module['reponame'] . '.atom';
		$install_nfo = DATA_PATH . str_replace(' ','_',$module['title']) . ".nfo";
		$on_disk = file_exists($install_nfo);
		$is_old = $on_disk && (strtotime('+1 hour', filemtime($local_repo_file)) <= time());
		//echo $install_nfo;
		$folder = str_replace(' ','_',strtolower($module['title']));
		$installed = array_key_exists($folder,$installed_modules_by_folder);
		
		$installed_str = $on_disk ? $installed ? "<a class='uninstall' style='color:blue;' data-module-folder='$folder' data-module-id='".
												 $installed_modules_by_folder[$folder]."' href='#uninstall_$folder' >".uninstall."</a>" : 
												 "<a class='install' style='color:blue;' data-module-folder='$folder' href='#install_$folder' >".install."</a> - ".
												 "<a class='remove' style='color:red;' data-module-folder='$module[title]' data-remove-mode='modules' href='#remove_$folder' >".remove."</a>" : 
												 "<b style='color:red;' >".not_installed."</b>";
		$uptodate = FALSE;
		if($on_disk)
		{
			$install_nfo = file_get_contents($install_nfo);
			list($timestamp, $files) = explode("\n", $install_nfo);
			$uptodate = ($timestamp == $module['timestamp']) ? TRUE : FALSE;
		}
		$updated_str =	$on_disk ?
							$uptodate ? 
								$is_old ? " - <a class='search' style='color:brown;' href='?m=".$_GET['m']."&searchForUpdates=".$module['reponame']."' >".search_for_updates."</a>" : 
								" - <b style='color:green;' >".uptodate."</b>" : 
							" - <b style='color:orange;' >".update_available."</b> (".$module['date'].")" : 
						"";
		$disabled = $uptodate ? "disabled=disabled" : "";
		echo '<input type="checkbox" name="module" value="'.$key."\" $disabled>";
		echo '<b>'.$module['title']."</b> - $installed_str$updated_str <span id='loading' class='$folder' ></span><br>";
	}
	
	echo "</div></td><td></div>";
	
	# THEMES
	echo "<div class=\"dragbox bloc rounded\" style=\"margin:1%;\">".
		 "<h4>".extra_themes."</h4>".
		 "<div class=\"dragbox-content\" >";
	foreach($themes as $key => $theme)
	{
		$local_repo_file = DATA_PATH . $theme['reponame'] . '.atom';
		$install_nfo = DATA_PATH . str_replace(' ','_',$theme['title']) . ".nfo";
		$on_disk = file_exists($install_nfo);
		$is_old = $on_disk && (strtotime('+1 hour', filemtime($local_repo_file)) <= time());
		$installed_str = $on_disk ? "<b style='color:green;' >".installed."</b> - ".
									"<a class='remove' style='color:red;' data-module-folder='$theme[title]' data-remove-mode='themes' href='#remove_$folder' >".remove."</a>": 
									"<b style='color:red;' >".not_installed."</b>";
		$uptodate = FALSE;
		if($on_disk)
		{
			$install_nfo = file_get_contents($install_nfo);
			list($timestamp, $files) = explode("\n", $install_nfo);
			$uptodate = ($timestamp == $theme['timestamp']) ? TRUE : FALSE;
		}
		
		
		$updated_str =	$on_disk ? 
							$uptodate ? 
								$is_old ? " - <a class='search' style='color:brown;' href='?m=".$_GET['m']."&searchForUpdates=".$theme['reponame']."' >".search_for_updates."</a>" : 
								" - <b style='color:green;' >".uptodate."</b>" :
							" - <b style='color:orange;' >".update_available."</b> (".$theme['date'].")" :
						"";
		$disabled = $uptodate ? "disabled=disabled" : "";
		echo '<input type="checkbox" name="theme" value="'.$key."\" $disabled>";
		echo '<b>'.$theme['title']."</b> - $installed_str$updated_str<br>";
	}
	
	echo "</div></div></td></tr>".
		 "<tr><td colspan=2 ><span id=updateButton ><button name=update >".download_update."</button></span></td></tr></table><div id=resp ></div>";
	
	echo "<div id='dialog".
		 "' data-uninstalling_module_dataloss='".uninstalling_module_dataloss.
		 "' data-are_you_sure='".are_you_sure.
		 "' data-remove_files_for='".remove_files_for.
		 "' data-confirm='".confirm.
		 "' data-cancel='".cancel.
		 "' ></div>";
}
?>
