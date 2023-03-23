<? 


$query = "SELECT empresas.nombre_empresa, COUNT(*) AS num_empleados
FROM empresas
JOIN empleados ON empresas.id_empresa = empleados.id_empresa
GROUP BY empresas.nombre_empresa";



?>