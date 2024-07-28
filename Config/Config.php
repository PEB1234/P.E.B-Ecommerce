<?php 
	const BASE_URL = "http://localhost/P.E.B";
	//const BASE_URL = "https://Sion/tiendavirtual";

	//Zona horaria
	date_default_timezone_set('America/Bogota');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual2";	
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = 
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Sion";
	const EMAIL_REMITENTE = "no-reply@Sion.com";
	const NOMBRE_EMPESA = "Sion";
	const WEB_EMPRESA = "www.Sioncolombia.com";

	const DESCRIPCION = "Proyeto Formativo";
	const SHAREDHASH = "P.E.B";

	//Datos Empresa
	const DIRECCION = "Av. Calle 43 Sur # 80H-12 Keneddy";
	const TELEMPRESA = "+57 3028339987";
	const WHATSAPP = "+573028339987";
	const EMAIL_EMPRESA = "Sioncolombia@gmail.com";
	const EMAIL_PEDIDOS = "Sioncolombia@gmail.com"; 
	const EMAIL_SUSCRIPCION = "Sioncolombia@gmail.com";
	const EMAIL_CONTACTO = "Sioncolombia@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'Sion';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "http://facebook.com/";
	const INSTAGRAM = "https://www.instagram.com/";
	

 ?>