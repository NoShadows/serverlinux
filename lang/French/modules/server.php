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

// servers.php
define('add_new_remote_host', "Ajouter un nouveau h�te distant");
define('configured_remote_hosts', "H�te distant configur�");
define('remote_host', "H�te distant");
define('remote_host_info', "L'h�te distant doit avoir un nom d'h�te (hostname) pingable !");
define('remote_host_port', "Port de l'h�te distant");
define('remote_host_port_info', "Le port depuis lequel l'Agent OGP �coute sur l'h�te distant. D�faut: 12679.");
define('remote_host_name', "Nom de l'h�te distant");
define('remote_host_name_info', "Le nom de l'h�te distant sera utiliser pour faciliter sa reconnaissance dans tout le panneau.");
define('add_remote_host', "Ajouter un h�te distant");
define('remote_encryption_key', "Cl� de chiffrement distante");
define('remote_encryption_key_info', "La cl� de chiffrement distante est utilis� pour crypter les donn�es entre le panneau et l'h�te distant.<br>Cette cl� doit �tre la m�me sur les deux machines.");
define('server_name', "Nom du serveur");
define('agent_ip_port', "IP:Port de l'Agent");
define('agent_status', "Statut de l'Agent");
define('ips', "IPs");
define('add_more_ips', "Si vous voulez entrer plus d'IPs, cliquez sur 'D�finir IPs' quand tous les champs sont remplis et un champ vide appara�tra.");
define('encryption_key_mismatch', "La cl� de chiffrement ne correspond pas � celle de l'Agent. V�rifiez vos fichiers de configuration.");
define('no_ip_for_remote_host', "Vous devez ajouter au moins une (1) adresse IP pour chaque h�te distant.");
define('note_remote_host', "Un h�te distant est un serveur o� l'Agent OGP tourne. Chaque h�te peut avoir plusieurs adresses IPs que les utilisateurs utiliserons pour leurs serveurs de jeux");
define('ip_administration', "Serveur &amp; IP Administration :: Open Game Panel");
define('unknown_error', "Erreur inconnue - status_chk a retourn�");
define('remote_host_user_name', "Utilisateur UNIX");
define('remote_host_user_name_info', "Utilisateur qui fait tourner l'Agent. Exemple: Jonhy");
define('ogp_user', remote_host_user_name);
define('ogp_user_info', remote_host_user_name_info);
define('remote_host_ftp_ip', "IP FTP");
define('remote_host_ftp_ip_info', "Le <b>IP</b> du serveur FTP pour cet Agent.");
define('remote_host_ftp_port', "Port FTP");
define('remote_host_ftp_port_info', "Le <b>port</b> du serveur FTP pour cet Agent.");
define('view_log', "Voir le log");
define('status', "Statut");
define('stop_firewall', "Arr�ter le Firewall (pare-feu)");
define('start_firewall', "D�marrer le Firewall (pare-feu)");
define('seconds', "Secondes");
define('reboot', "Red�marrer le Serveur Distant");
define('restart', "Red�marrer l'Agent");
define('confirm_reboot', "Etes-vous s�r de vouloir red�marrer physiquement la machine distante nomm�e '%s'?");
define('confirm_restart', "Etes-vous s�r de vouloir red�marrer l'Agent nomm� '%s'?");
define('restarting', "Red�marrage de l'Agent... Veuillez patienter.");
define('restarted', "Agent red�marr� avec succ�s.");
define('reboot_success', "Le serveur nomm� '%s' a �t� red�marr� avec succ�s. Vous ne pourrez pas acc�der au serveur tant qu'il n'est pas compl�tement red�marr�.");

// edit_server.php
define('invalid_remote_host_id', "ID '%s' de l'h�te distant invalide.");
define('remote_host_removed', "H�te distant '%s' supprim� avec succ�s.");
define('editing_remote_server', "Edition de l'h�te distant '%s'");
define('remote_server_settings_changed', "Changement des param�tres pour le serveur distant '%s' effectu� avec succ�s.");
define('save_settings', "Sauvegarder les param�tres");
define('set_ips', "D�finir IPs");
define('remote_ip', "IP distante");
define('remote_ips_for', "IPs distantes pour le serveur '%s'");
define('ips_set_for_server', "IPs pour le serveur '%s' d�finies avec succ�s.");
define('could_not_remove_ip', "Impossible de supprimer l'IP de la base de donn�es.");
define('could_add_ip', "Peut ajouter l'IP du serveur distant � la base de donn�es.");
define('areyousure_removeagent', "Etes-vous s�r de vouloir supprimer l'Agent");
define('areyousure_removeagent2', "et tous les serveurs qui lui sont reli�s dans la base de donn�es OGP ?");
define('error_while_remove', "Erreur lors de la suppresion du serveur distant.");
define('add_ip', "Ajouer IP");
define('remove_ip', "Supprimer IP");
define('edit_ip', "Editer IP");
define('wrote_changes', "Changement effectu� avec succ�s.");
define('there_are_servers_running_on_this_ip', "Il y a des serveurs d�marr�s avec cette adresse IP.");

// add_server.php
define('enter_ip_host', "Vous devez entrer une IP pour l'h�te distant.");
define('enter_valid_ip', "Vous devez entrer un port valide pour l'h�te distant. La valeur du port peut �tre comprise entre 0 et 65535, cependant les valeurs recommand�es sont celles comprises entre 1024 et 65535.");
define('could_not_add_server', "Impossible d'ajouter le serveur");
define('to_db', "� la base de donn�es.");
define('added_server', "Serveur ajout�");
define('with_port', "avec le port");
define('to_db_succesfully', "dans la base de donn�es avec succ�s.");
define('unable_discover', "Impossible de d�couvrir automatiquement les IPs sur");
define('set_ip_manually', "Vous devez les entrer manuellement.");
define('found_ips', "IPs trouv�s");
define('for_remote_server', "pour le serveur distant.");
define('failed_add_ip', "Impossible d'ajouter l'IP");
define('timeout', "Time Out");
define('timeout_info', "Secondes. La limite de temps pour avoir une r�ponse de l'Agent.");
define('use_nat', "Utiliser le NAT");
define('use_nat_info', "Activez le si votre serveur distant utlise les r�gles NAT.");

// arrange_servers.php
define('arrange_ports', "Arranger les ports");
define('assign_new_ports_range_for_ip', "Assigner nouvelle plage de ports pour l'IP %s");
define('assigned_port_ranges_for_ip', "Plages de ports assign�es pour l'IP %s");
define('assigned_ports_for_ip', "Ports assign�s pour l'IP %s");
define('unspecified_game_types', "Types de jeu non sp�cifi�");
define('start_port', "Port de d�but:");
define('end_port', "Port de fin:");
define('port_increment', "Incr�ment de Port:");
define('total_assignable_ports', "Ports assignables au Total:");
define('available_range_ports', "Plage de ports disponible:");
define('assign_range', "Assigner plage");
define('edit_range', "Editer plage");
define('delete_range', "Supprimer plage");
define('home_id', "Home ID");
define('home_path', "Chemin Home");
define('game_type', "Type de jeu");
define('port', "Port");
define('invalid_values', "Valeurs invalides.");
define('ports_in_range_already_arranged', "Ports dans la Plage d�j� arrang�s.");
define('ports_range_already_configured_for', "Plage de ports d�j� configur�e pour %s.");
define('ports_range_added_successfull_for', "Plage de ports ajout�e avec succ�s pour %s.");
define('ports_range_deleted_successfull', "Suppression de la Plage de ports avec succ�s.");
define('ports_range_edited_successfull_for', "Plage de ports �dit�e avec succ�s pour %s.");

// Firewall
define('editing_firewall_for_remote_server', 'Editer le Firewall pour le serveur distant nomm� "%s"');
define('default_allowed', 'Autoris� par d�faut');
define('allow_port_command', "Commande d'autorisation port");
define('deny_port_command', 'Commande de blocage port');
define('allow_ip_port_command', "Commande d'autorisation IP:port");
define('deny_ip_port_command', 'Commande de blocage IP:port');
define('enable_firewall_command', 'Commande pour activer le Firewall');
define('disable_firewall_command', 'Commande pour d�sactiver le Firewall');
define('get_firewall_status_command', 'Commande pour le statut du Firewall');
define('reset_firewall_command', 'Commande pour le Reset du Firewall');
define('firewall_status', 'Statut du Firewall');
define('save_firewall_settings', 'Enregistrer les param�tres du Firewall');
define('reset_firewall', 'Reset du Firewall');
define('firewall_settings', 'Param�tres du Firewall');
?>
