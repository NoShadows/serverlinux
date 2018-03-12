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

// server.php
define('configured_mysql_hosts', "H�tes MySQL configur�s");
define('add_new_mysql_host', "Ajouter un h�te MySQL");
define('enter_mysql_ip', "Entrer l'IP MySQL.");
define('enter_valid_port', "Entrer un port valide.");
define('enter_mysql_root_password', "Entrer le mot de passe root MySQL.");
define('enter_mysql_name', "Entrer le nom MySQL.");
define('could_not_add_mysql_server', "Impossible d'ajouter le serveur MySQL.");
define('game_server_name_info', "Serveur ajout�.");
define('note_mysql_host', "Note: En utilisant la 'Connexion directe' le serveur doit accepter les connexions externes pour que les serveurs puissent se connecter � distance, tandis qu'en utilisant la connexion par serveur distant cela sera consid�r� comme une connexion locale.");
define('direct_connection', "Connexion directe");
define('connection_through_remote_server_named', "Connexion par serveur distant nomm� %s");
define('add_mysql_server', "Ajouter le serveur MySQL");
define('mysql_online', "MySQL  en ligne");
define('mysql_offline', "MySQL hors ligne");
define("encryption_key_mismatch", "La cl� de chiffrement ne correspond pas");
define("unknown_error", "Erreur inconnue");
define("remove", "Supprimer");
define("assign_db", "Assigner  une Base de Donn�es");
define("mysql_server_name", "Nom du serveur MySQL");
define("server_status", "Status du serveur");
define('mysql_ip_port', "MySQL IP:port");
define('mysql_root_passwd', "Mot de passe root MySQL");
define('connection_method', "M�thode de connexion");
define('user_privilegies', "Privil�ges utilisateur");
define('current_dbs', "Bases de Donn�es actuelles");
define('mysql_name', "Nom du serveur MySQL");
define('mysql_ip', "IP MySQL");
define('mysql_port', "Port MySQL");
define('privilegies', "privil�ges");
define('all', "Tous");
define('custom', "Personnalis�");
define('server_added', "Serveur ajout�.");

//privileges
define('alter', "ALTER");
define('create', "CREATE");
define('create_temporary_tables', "CREATE TEMPORARY TABLES");
define('drop', "DROP");
define('index', "INDEX");
define('insert', "INSERT");
define('lock_tables', "LOCK TABLES");
define('select', "SELECT");
define('grant_option', "GRANT OPTION");

//privileges descriptions
define('alter_info', "<b>Autorise l'utilisation de ALTER TABLE.</b>");	
define('create_info', "<b>Autorise l'utilisation de CREATE TABLE.</b>");	
define('create_temporary_tables_info', "<b>Autorise l'utilisation de CREATE TEMPORARY TABLE.</b>");
define('delete_info', "<b>Autorise l'utilisation de DELETE.</b>");
define('drop_info', "<b>Autorise l'utilisation de DROP TABLE.</b>");	
define('index_info', "<b>Autorise l'utilisation de CREATE INDEX et DROP INDEX.</b>");	
define('insert_info', "<b>Autorise l'utilisation de INSERT.</b>");	
define('lock_tables_info', "<b>Autorise l'utilisation de LOCK TABLES sur les tables pour lesquelles on a les privil�ges SELECT.</b>");	
define('select_info', "<b>Autorise l'utilisation de SELECT.</b>");
define('update_info', "<b>Autorise l'utilisation de UPDATE.</b>");	
define('grant_option_info', "<b>Permet d'accorder des privil�ges.</b>");

// edit_server.php
define('select_game_server', "S�lectionner serveur de jeu");
define('invalid_mysql_server_id', "ID serveur MySQL invalide.");
define('there_is_another_db_named_or_user_named', "Il y a une autre base de donn�es nomm�e <b>%s</b> ou un autre utilisateur appel� <b>%s</b>.");
define('db_added_for_home_id', "Base de Donn�es ajout�e pour le home ID <b>%s</b>.");
define('could_not_remove_db', "La base de donn�es s�lectionn�e ne peut pas �tre supprim�e.");
define('db_removed_successfully_from_mysql_server_named', "La base de donn�es a �t� supprim�e du serveur %s.");
define('areyousure_remove_mysql_server', "Etes-vous s�r de vouloir supprimer le serveur MySQL nomm� <b>%s</b>?");
define('db_changed_successfully', "La base de donn�es nomm�e %s a �t� modifi�e avec succ�s.");
define('error_while_remove', "Erreur lors de la suppression.");
define('mysql_server_removed', "Le serveur MySQL nomm� <b>%s</b> a �t� supprim� avec succ�s.");
define('unable_to_set_changes_to', "Impossible d'appliquer les changements au serveur MySQL nomm� <b>%s</b>.");
define('mysql_server_settings_changed', "Le serveur MySQL nomm� <b>%s</b> a �t� modifi� avec succ�s.");
define('editing_mysql_server', "Edition du serveur MySQL nomm� <b>%s</b>.");
define('save_settings', "Enregistrer les param�tres");
define('mysql_dbs_for', "Bases de donn�es pour le serveur %s");
define('edit_dbs', "Editer les bases de donn�es");
define('edit_db_settings', "Editer les param�tres de la base de donn�es");
define('remove_db', "Supprimer la base de donn�es");
define('save_db_changes', "Sauvegarder les modifications de base de donn�es.");
define('add_db', "Ajouter base de donn�es");
define('select_db', "S�lectionner base de donn�es");
define('db_user', "Utilisateur BDD");
define('db_passwd', "Mot de passe BDD");
define('db_name', "Nom de la BDD");
define('enabled', "Activ�e");
define('game_server', "Serveur de jeu");

// user_db.php
define('there_are_no_databases_assigned_for', "Il n'y a pas de bases de donn�es assign�es pour <b>%s</b>.");
define('unable_to_connect_to_mysql_server_as', "Impossible de se connecter au serveur MySQL en tant que %s.");
define('unable_to_create_db', "Impossible de cr�er la base de donn�es.");
define('unable_to_select_db', "Impossible de s�lectionner la base de donn�es %s.");
define('db_info', "Information Base de Donn�es");
define('db_tables', "Tables de la base de donn�es");
define('db_backup', "Sauvegarde de la Base De Donn�es");
define('download_db_backup', "T�l�charger la sauvegarde de la BDD");
define('restore_db_backup', "Restaurer la sauvegarde de la BDD");
define('sql_file', "fichier(.sql)");
?>