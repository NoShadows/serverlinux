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

define("create_alias", "Crear el alias y la carpeta");
define("save_as", "Guardar como");
define("failure", "Error, no se pudo generar el archivo de alias.");
define("success", "Exito");
define("fast_download_service_for", "Servicio de redirección de descargas para %s");
define("to_the_path", "para la ruta");
define("at_url", "en la URL");
define("create_alias_for", "Crear alias para");
define("fast_dl", "Redirección de descargas (FastDL)");
define("current_aliases_at_remote_server", "Alias actuales en el servidor remoto");
define("delete_selected_aliases", "Elimina los alias seleccionados");
define("no_aliases_defined", "No hay alias web definidas por OGP para este servidor remoto todavía.");
define("fastdl_port", "Puerto");
define("fastdl_port_info", "Puerto en el que tu servidor Fast Download se iniciará.");
define("fastdl_ip", "Dirección");
define("fastdl_ip_info", "La IP o dominio en el que tu servidor Fast Download se iniciará, los dominios tienen que estar descritos en /etc/hosts.");
define("listing", "Listar");
define("listing_info", "Si está activado el servidor mostrara una lista del contenido de las carpetas.");
define("fast_dl_advanced", "Configuración Avanzada");
define("apply_settings_and_restart_fastdl", "Guardar la configuracion del servicio de redirección de descargas y reiniciarlo");
define("stop_fastdl", "Parar el servicio de redirección de descargas.");
define("fast_download_daemon_running", "El servicio de redirección de descargas está en marcha.");
define("fast_download_daemon_not_running", "El servicio de redirección de descargas está parado.");
define("fastdl_could_not_be_restarted", "No fue posible reiniciar el servicio Fast Download.");
define("configuration_file_could_not_be_written", "No se pudo escribir en el archivo de configuración.");
define("remove_folders", "Eliminar carpeta para los alias seleccionados.");
define("remove_folder", "Eliminar carpeta");
define("delete_alias", "Eliminar alias");
define('no_game_homes_assigned', "No hay ninguna home asignada a su cuenta.");
define('select_remote_server', "Seleccione un servidor remoto");
define('access_rules', "Reglas de acceso");
define('create_aliases', "Crear alias");
define('select_game', "Seleccione un juego");
define('games_without_specified_rules', "Juegos sin reglas especificadas");
define('match_file_extension', "Coincide la extension");
define('match_file_extension_info', "Especifique extensiones separadas por coma,<br> los archivos que coincidan serán accesibles.<br>".
									"<b>Vacio para acceso ilimitado.</b>.");
define('match_client_ip', "Coincide la IP del cliente");
define('match_client_ip_info', "Las conexiones con IP coincidente serán concedidas,<br>".
							   "Vacio para acceso ilimitado.<br>".
							   "Puede usar multiples IPs<br>".
							   "o rangos separados por coma:<br>".
							   "Subredes /xx<br>".
							   "Ejemplo: 10.0.0.0/16<br>".
							   "Subredes /xxx.xxx.xxx.xxx<br>".
							   "Ejemplo: 10.0.0.0/255.0.0.0<br>".
							   "Rango establecido por un guión<br>".
							   "Ejemplo: 10.0.0.5-230<br>".
							   "Coincidencia por asterisco<br>".
							   "Ejemplo: 10.0.*.*");
define('save_access_rules', "Guardar reglas de acceso");
define('create_access_rules', "Crear reglas de acceso");
define('invalid_entries_found', "Se han encontrado entradas invalidas");
define('game_name', "Nombre del juego");
define('alias_already_exists', "El alias '%s' ya existe.");
define('warning_access_rules_applied_once_alias_created', "AVISO: Las reglas de acceso son aplicadas cuando se crea el alias. ".
														  "Ningún cambio será aplicado a los alias existentes.");
define('autostart_on_agent_startup', "Autoiniciar al iniciar el agente");
define('autostart_on_agent_startup_info', "Iniciar el servicio de redireccion automaticamente cuando se inicia el agente.");
define('port_forwarded_to_80', "Puerto redireccionado desde el puerto 80");
define('port_forwarded_to_80_info', "Activa esta opción si el puerto 80 ha sido redireccionado al puerto configurado para este servicio, por lo que se ocultará en las URLs.");
?>