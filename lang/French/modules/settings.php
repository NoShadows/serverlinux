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

// settings.php
define('maintenance_mode', "Maintenance");
define('maintenance_mode_info', "D�sactive le site pour que seuls les administrateurs puissent s'y connecter.");
define('maintenance_title', "Titre pour la maintenance");
define('maintenance_title_info', "Le titre qui est affich� aux utilisateurs durant la maintenance.");
define('maintenance_message', "Message de la maintenance");
define('maintenance_message_info', "Le message qui est affich� aux utilisateurs durant la maintenance.");
define('update_settings', "Mettre � jour les param�tres");
define('settings_updated', "Param�tres mis � jour avec succ�s.");
define('panel_language', "Langue du panneau");
define('panel_language_info', "La langue d�finie ici est la langue par d�faut du panneau. Les utilisateurs peuvent la changer depuis leur page de profil.");
define('page_auto_refresh', "Rafra�chissement automatique des pages");
define('page_auto_refresh_info', "Le rafra�chissement automatique des pages est surtout utilis� dans les pages de logs. Il est pr�f�rable de l'activer.");
define('smtp_server', "Serveur sortant mail");
define('smtp_server_info', "C'est le serveur sortant pour e-mails (serveur SMTP) utilis� pour, par exemple, envoyer les mots de passes aux utilisateurs.<br>'localhost' est par d�faut.");
define('panel_email_address', "Adresse e-mail sortante");
define('panel_email_address_info', "C'est l'adresse e-mail qui est utilis�e pour envoyer les mails.");
define('panel_name', "Nom du panneau");
define('panel_name_info', "Le nom du panneau qui est affich� dans le titre des pages. Cette valeur �crase les titres des pages si elle est d�finie.");
define('feed_enable', "Activer LGSL Feed");
define('feed_enable_info', "Si votre h�bergement web a un pare-feu (firewall) bloquant les requ�tes sur les ports, vous devez l'activer.");
define('feed_url', "Feed URL");
define('feed_url_info', "GrayCube.com partage un 'LGSL feed' depuis l'URL :<br><b>http://www.greycube.co.uk/lgsl/feed/lgsl_files/lgsl_feed.php</b>");
define('charset', "Encodage des caract�res");
define('charset_info', "UTF8, ISO, ASCII, etc... Laissez vide pour utiliser l'encodage ISO.");
define('steam_user', "Nom d'utilisateur Steam");
define('steam_user_info', "Ce nom d'utilisateur est utilis� pour se connecter � Steam et t�l�charger les jeux comme CS:GO.");
define('steam_pass', "Mot de passe Steam");
define('steam_pass_info', "Le mot de passe pour le compte Steam utilis�.");
define('steam_guard', "Steam Guard");
define('steam_guard_info', "Des utilisateurs ont Steam Guard activ�s pour prot�ger leur compte des pirates,<br>ce code est envoy� par e-mail lors de la premi�re installation.");
define('smtp_port', "Port SMTP");
define('smtp_port_info', "Si le port SMTP n'est pas celui par d�faut (25), entrez le ici.");
define('smtp_login', "Utilisateur SMTP");
define('smtp_login_info', "Si le serveur SMTP requiert une authentification, entrez votre nom d'utilisateur ici.");
define('smtp_passw', "Mot de passe SMTP");
define('smtp_passw_info', "Si vous ne mettez pas de mot de passe, l'authentification STMP sera d�sactiv�e.");
define('smtp_secure', "SMTP Secure");
define('smtp_secure_info', "Utilisez-vous le SSL/TLS pour vous connecter � votre serveur SMTP ?");
define('time_zone', "Fuseau horaire");
define('time_zone_info', "D�finissez le fuseau horaire par d�faut utiliser pour toutes les dates et les temps.");
define('query_cache_life', "Temps de vie du cache des requ�tes");
define('query_cache_life_info', "D�finissez le timeout en seconde avant que le statut du serveur ne soit rafra�chi.");
define('query_num_servers_stop', "D�sactiver Interrogation du Serveur de Jeu apr�s");
define('query_num_servers_stop_info', "Utiliser ce param�tre pour d�sactiver l'interrogation du serveur si l'utilisateur poss�de plus de serveurs que la valeur sp�cifi�e pour acc�l�rer le chargement de Panneau.");
define('editable_email', "Adresse E-Mail �ditable");
define('editable_email_info', "Choisissez si l'utilisateur peut modifier son adresse e-mail.");
define('old_dashboard_behavior', "Ancien comportement du Tableau de bord");
define('old_dashboard_behavior_info', "L'ancien Tableau de bord �tait plus lent mais montrait plus d'informations sur le serveur, les joueurs et la carte.");
define('rsync_available', "Serveurs Rsync disponibles");
define('rsync_available_info', "Choisissez quelle liste de serveurs sera visible � l'installation Rsync.");
define('all_available_servers', "Tous serveurs disponibles ( rsync_sites.list + rsync_sites_local.list )");
define('only_remote_servers', "Seulement les serveurs distants ( rsync_sites.list )");
define('only_local_servers', "Seulement les serveurs locaux ( rsync_sites_local.list )");
define('header_code', "Code Header");
define('header_code_info', "Ici vous pouvez �crire votre propre code Header (comme du code HTML, du code int�gr�, etc.) sans �diter la structure du th�me.");
define('support_widget_title', "Titre du widget Assistance");
define('support_widget_title_info', "Un titre personnalis� pour le widget Assistance dans le Tableau de bord.");
define('support_widget_content', "Contenu du widget Assistance");
define('support_widget_content_info', "Le contenu du widget Assistance, vous pouvez utiliser du code HTML.");
define('support_widget_link', "Lien du widget Assistance");
define('support_widget_link_info', "L'URL de votre site d'Assistance.");
define('recaptcha_site_key', "Cl� de Site Recaptcha");
define('recaptcha_site_key_info', "La cl� de site fournie par Google.");
define('recaptcha_secret_key', "Cl� Secr�te Recaptcha");
define('recaptcha_secret_key_info', "La cl� secr�te fournie par Google.");
define('recaptcha_use_login', "Utiliser Recaptcha � l'Authentification");
define('recaptcha_use_login_info', "Si activ�, l'utilisateur devra r�soudre le Recaptcha Pas Un Robot lors de l'authentification.");
define('remote_query', "Interrogation � distance");
define('remote_query_info', "Utiliser le serveur distant (Agent) pour interroger les serveurs de jeu (seulement GameQ et LGSL).");
define('check_expiry_by', "V�rifier l'expiration en utilisant");
define('check_expiry_by_info', "Si mis sur once_logged_in, l'attribution de serveur de jeu de l'utilisateur sera automatiquement supprim�e si la date d'expiration est d�pass�e. Si mis sur cron_job, vous devrez cr�er une t�chr cron  en utilisant le module cron pour v�rifier la date d'expiration � un interval d�termin�.");
define('once_logged_in', "Once Logged In");
define('cron_job', "Cron Job");

// Theme settings
define('theme_settings', "Param�tres du th�me");
define('theme', "Th�me");
define('theme_info', "Le th�me s�lectionn� sera le th�me par d�faut de tous les utilisateurs. Ils pourront le changer depuis leur page de profil.");
define('welcome_title', "Titre de bienvenue");
define('welcome_title_info', "Active le titre qui s'affiche en haut du Tableau de bord.");
define('welcome_title_message', "Message du titre de bienvenue");
define('welcome_title_message_info', "Le message du titre de bienvenue affich� en haut du Tableau de bord (HTML autoris�).");
define('logo_link', "Lien du logo");
define('logo_link_info', "Le lien vers o� on est redirig� si on clique sur le logo. <b style='font-size:10px; font-weight:normal;'>(Laissez vide si vous voulez que �a redirige vers le Tableau de bord)</b>");
define('custom_tab', "Onglet personnalis�");
define('custom_tab_info', "Permet d'ajouter un onglet � la fin du menu. <b style='font-size:10px; font-weight:normal;'>(Activez-le puis validez pour le param�trer)</b>");
define('custom_tab_name', "Nom de l'onglet personnalis�");
define('custom_tab_name_info', "Le nom sur l'onglet personnalis�.");
define('custom_tab_link', "Lien de l'onglet personnalis�");
define('custom_tab_link_info', "Le lien sur lequel on est redirig� si on clique sur l'onglet personnalis�.");
define('custom_tab_sub', "Sous-onglet personnalis�");
define('custom_tab_sub_info', "Ajoute plusieurs sous-onglets personnalis�s en dessous de l'onglet personnalis�.");
define('custom_tab_sub_name', "Nom du sous-onglet #1");
define('custom_tab_sub_link', "Lien du sous-onglet #1");
define('custom_tab_sub_name2', "Nom du sous-onglet #2");
define('custom_tab_sub_link2', "Lien du sous-onglet #2");
define('custom_tab_sub_name3', "Nom du sous-onglet #3");
define('custom_tab_sub_link3', "Lien du sous-onglet #3");
define('custom_tab_sub_name4', "Nom du sous-onglet #4");
define('custom_tab_sub_link4', "Lien du sous-onglet #4");
define('custom_tab_target_blank', "Cible des (sous-)onglets personnalis�s");
define('custom_tab_target_blank_info', "D�finit la cible de tous les onglets. <b style='font-size:10px; font-weight:normal;'>('_self' = le lien s'ouvre dans la m�me page. '_blank'  =  le lien s'ouvre dans un nouvel onglet.)</b>");
define('bg_wrapper', "Fond d'�cran du panneau");
define('bg_wrapper_info', "L'image fond d'�cran du panneau. <b style='font-size:10px; font-weight:normal;'>(Pas disponible sur tous les th�mes.)</b>");
?>
