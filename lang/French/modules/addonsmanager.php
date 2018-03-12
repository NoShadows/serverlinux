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

// Addons
define('install_plugin', "Installer le pugin");
define('install_mappack', "Installer le pack de maps");
define('install_config', "Installer la configuration");
define('game_name', "Nom du jeu");
define('directory', "Chemin du r�pertoire");
define('remote_server', "Serveur distant");
define('select_addon', "Selectionner addon");
define('install', "Installer");
define('failed_to_start_file_download', "Impossible de d�marrer le t�l�chargement.");
define('no_games_servers_available', "Il n'y a pas de serveur disponible sur votre compte.");
define('addon_installed_successfully', "Addon install� avec succ�s.");
define('path', "Chemin");
define('wait_while_decompressing', "Attendez que le fichier %s soit d�compress�.");

// Admin Addons
define('addon_name', "Nom de l'addon");
define('url', "URL");
define('select_game_type', "S�lectionner le jeu");
define('plugin', "Plugin");
define('mappack', "Pack de maps");
define('config', "Configuration");
define('type', "Type d'addon");
define('game', "Jeu");
define('show_all_addons', "Voir tous les addons");
define('show_addons_for_selected_type', "Voir les addons pour le type s�lectionn�");
define('show_addons_for_selected_game', "Voir les addons pour le jeu s�lectionn�");
define('linux_games', "Jeux Linux :");
define('windows_games', "Jeux Windows :");
define('create_addon', "Cr�er un addon");
define('addons_db', "Base de donn�es des addons");
define('addon_has_been_created', "L'addon %s a �t� cr��.");
define('remove_addon', "Supprimer addon");
define('fill_the_url_address_to_a_compressed_file', "Veuillez entrer une URL d'un fichier compress�.");
define('fill_the_addon_name', "Veuillez entrer un nom � l'addon.");
define('select_an_addon_type', "Veuillez choisir un type pour l'addon.");
define('select_a_game_type', "Veuillez choisir un jeu.");
define('edit_addon', "Editer addon");
define('post-script', "Script de post-installation (bash)");
define('replacements', "Remplacements :");
define('addon_name_info', "Saisissez un nom pour votre addon, ce sera le nom visible par les utilisateurs.");
define('url_info', "Saisissez l'adresse internet (URL) h�bergeant les fichiers � t�l�charger, si les fichiers sont compress�s en zip ou en tar.gz, il seront automatiquement d�compress�s dans le r�pertoire root du serveur ou dans le r�pertoire indiqu� dans la rubrique 'Chemin'.");
define('path_info', "Le r�pertoire doit �tre relatif au r�pertoire du serveur et ne contenir aucun slashes ('/') ni d�but ni � la fin, example: 'cstrike/cfg'. Si le champ reste vide, le chemin par d�faut sera le r�pertoire root du serveur.");
define('post-script_info', "Saisissez votre code en langage Bash, il sera ex�cut� comme un script, vous pouvez utiliser les variables de remplacement pour personnaliser l'installation. Le script s'ex�cutera depuis le r�pertoire root du serveur ou depuis le r�pertoire indiqu� dans la rubrique 'Chemin'.");
?>