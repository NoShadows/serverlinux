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

include('litefm.php');
// updating.php
define('curl_needed', "Cette page requiert le module PHP curl.");
define('no_access', "Vous devez avoir les droits d'administration pour acc�der � cette page.");
define('dwl_update', "T�l�chargement de la mise � jour...");
define('dwl_complete', "T�l�chargement compl�t�");
define('install_update', "Mise � jour en cours...");
define('update_complete', "Mise � jour effectu�e avec succ�s");
define('ignored_files', "%s fichiers ignor�s.");
define('not_updated_files_blacklisted', "Fichiers non mis � jour/install�s (Blacklist�s):<br>%s");

// update.php
define('latest_version', "Derni�re version");
define('panel_version', "Version du panneau");
define('update_now', "Mettre � jour maintenant");
define('the_panel_is_up_to_date', "Le panneau est � jour.");
define('files_overwritten', "%s fichiers �cras�s.");
define('can_not_update_non_writable_files', "Impossible de mettre � jour car les fichiers/dossiers suivants ne peuvent pas �tre modifi�s");
define('dwl_failed', "L'URL de t�l�chargement n'est pas accessible : \"%s\".<br>R�essayer plus tard.");
define('temp_folder_not_writable', "Le t�l�chargement ne peut d�marr� car le serveur Web n'a pas la permission d'�crire dans le dossier temporaire(%s).");
define('base_dir_not_writable', "Le panneau ne peut �tre mis � jour car le serveur Web n'a pas les droits d'�criture sur le dossier \"%s\".");
define('new_files', "%s nouveaux fichiers.");
define('updated_files', "Fichiers mis � jour :<br>%s");
define('view_changes', "Voir les changements");
define('get_x_revison_messages_may_take_some_time', "R�cup�rer %s messages de r�vision peut prendre du temps.");

//updating_modules.php
define('updating_modules', "Mise � jour des modules");
define('updating_finished', "Mise � jour termin�e");
define('updated_module', "Module mis � jour : '%s'.");
define('select_mirror', "S�lectionner le mirroir");

//blacklist.php
define('blacklist_files', "Liste Noire des fichiers");
define('blacklist_files_info', "Tous les fichiers marqu�s ne seront pas mis � jour.");
define('save_to_blacklist', "Enregistrer dans la Liste Noire");

define('no_new_updates', 'Pas de nouvelles mises � jour');
?>