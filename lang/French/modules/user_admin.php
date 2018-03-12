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

define('your_profile', "Votre profil");
define('new_password', "Nouveau mot de passe");
define('retype_new_password', "V�rification du nouveau mot de passe");
define('login_name', "Nom d'utilisateur");
define('language', "Langue");
define('first_name', "Pr�nom");
define('last_name', "Nom");
define('phone_number', "Num�ro de t�l�phone");
define('email_address', "E-mail");
define('city', "Ville");
define('province', "Province");
define('country', "Pays");
define('comment', "Commentaire");
define('expires', "Expire");
define('save_profile', "Sauvegarder le profil");
define('new_password_info', "Quand le champ mot de passe est vide, le mot de passe ne sera pas mis � jour.");
define('theme', "Th�me");
define('theme_info', "Si le champ th�me est vide, le th�me par d�faut sera utilis�.");
define('expires_info', "Date � laquelle le compte utilisateur expire. Le compte n'est pas supprim� mais l'utilisateur ne peut plus se connecter.");
define('password_mismatch', "Les mots de passe ne correspondent pas");
define('current_password', "Mot de passe actuel");
define('current_password_info', "Votre mot de passe actuel.");
define('current_password_mismatch', "Votre mot de passe actuel ne correspond pas avec celui de la base de donn�s.");

// show_users.php
define('add_new_user', "Ajouter un nouvel utilisateur");
define('edit_user_groups', "Editer un groupe d'utilisateurs");
define('users', "Utilisateurs");
define('user_role', "R�le utilisateur");
define('full_name', "Nom complet");
define('edit_games', "Editer les jeux");
define('edit_profile', "Editer le profil");


// add_user.php
define('confirm_password', "Confirmez le mot de passe");
define('you_need_to_enter_both_passwords', "Vous devez entrer votre mot de passe deux fois.");
define('passwords_did_not_match', "Les mots de passes ne correspondent pas.");
define('could_not_add_user_because_user_already_exists', "Impossible de rajouter l'utilisateur car l'utilisateur <em>%s</em> existe d�j�.");
define('successfully_added_user', "Utilisateur <em>%s</em> ajout� avec succ�s.");
define('add_a_new_user', "Ajouter un nouvel utilisateur");
define('admin', "Administrateur");
define('user', "Utilisateur");
define('user_with_id_does_not_exist', "Utilisateur avec l'ID %s n'existe pas.");
define('are_you_sure_you_want_to_delete_user', "Etes-vous s�r de vouloir supprimer l'utilisateur <em>%s</em> ?");
define('unable_to_delete_user', "Impossible de supprimer l'utilisateur %s.");
define('successfully_deleted_user', "Suppression de l'utilisateur <b>%s</b> effectu�e avec succ�s.");
define('failed_to_update_user_profile_error', "Impossible de mettre � jour le profil utilisateur. Erreur: %s");
define('profile_of_user_modified_successfully', "Le profil de l'utilisation <b>%s</b> a �t� modifi� avec succ�s.");

// subuser used in show_groups.php
define('no_subusers', "Aucun utilisateur secondaire n'est disponible pour �tre assign� � un groupe. Cr�ez des utilisateurs secondaires d'abord.");
define('ownedby', "Compte parent");
define('andSubUsers', " Et tous ces utilisateurs secondaires ?"); 
define('subusers', "Utilisateurs Secondaires"); 
define('show_subusers', "Montrer Utilisateurs Secondaires");
define('hide_subusers', "Cacher Utilisateurs Secondaires");

// *_group.php
define('info_group', "Sur cette page il est possible de g�rer les groupes d'utilisateurs. Vous pouvez asssigner un serveur � un groupe pour qu'il soit accessible par tout le groupe.");
define('add_new_group', "Ajouter un nouveau groupe");
define('group_name', "Nom du groupe");
define('add_group', "Ajouter le groupe");
define('no_groups_available', "Aucun groupe disponible.");
define('delete_group', "Supprimer le groupe");
define('add_user_to_group', "Ajouter un utilisateur au groupe");
define('add_user', "Ajouter l'utilisateur");
define('remove_from_group', "Supprimer du groupe");
define('add_server_to_group', "Ajouter un serveur au groupe");
define('add_server', "Ajouter le serveur");
define('no_remote_servers', "Aucun serveur distant disponible.");
define('servers_in_group', "Serveurs du groupe");
define('no_servers_in_group', "Aucun serveur pour le groupe %s.");
define('available_groups', "Groupes disponibles");
define('assign_homes', "Assigner un serveur");

// add_group.php
define('successfully_added_group', "Groupe %s ajout� avec succ�s.");
define('group_name_empty', "Le nom du groupe ne peut �tre vide.");
define('failed_to_add_group', "Impossible d'ajouter le groupe %s.");
define('could_not_add_user_to_group', "Impossible d'ajouter l'utilisateur %s au groupe %s car il y est d�j�.");
define('successfully_added_to_group', "Utilisateur %s ajout� au groupe <em>%s</em> avec succ�s.");
define('could_not_add_server_to_group', "Impossible d'ajouter le serveur au groupe %s car il y est d�j�.");
define('successfully_added_server_to_group', "Serveur ajout� au groupe <em>%s</em> avec succ�s.");
define('successfully_removed_from_group', "Utilisateur %s supprim� du groupe <em>%s</em> avec succ�s.");
define('could_not_delete_server_from_group', "Impossible de supprimer le serveur %s du groupe <em>%s</em>.");
define('successfully_removed_server_from_group', "Serveur %s supprim� du groupe <em>%s</em> avec succ�s.");
define('group_with_id_does_not_exist', "L'utilisateur avec l'ID %s n'existe pas.");
define('are_you_sure_you_want_to_delete_group', "Etes-vous s�r de vouloir supprimer le groupe <em>%s</em> ?");
define('unable_to_delete_group', "Impossible de supprimer le groupe %s.");
define('successfully_deleted_group', "Groupe <b>%s</b> supprim� avec succ�s.");

?>
