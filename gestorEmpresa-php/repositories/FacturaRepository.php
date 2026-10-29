<? class FacturaRepository{
    public function getAllFacturas(){
        $db=DB::connect();
        $q="select * from factura";
        $result=$db->query($q);

        while($row = $result->fetch_assoc()) {
            $facturas[] = new Factura($row['id'],$row['id_usuario'],$row['id_presupuesto'],$row['fecha'],$row['estado'],$row['total']);
        }
        return $facturas;
    }

    public function getFacturaById($id){
        $db=DB::connect();
        $q="select * from factura where id=$id";
        $result=$db->query($q);

        while($row = $result->fetch_assoc()) {
            $facturas[] = new Factura($row['id'],$row['id_usuario'],$row['id_presupuesto'],$row['fecha'],$row['estado'],$row['total']);
        }
        return $facturas;
    }

    public function getUserFacturas($id_usuario){
        $db=DB::connect();
        $q="select * from factura where id_usuario=$id_usuario";
        $result=$db->query($q);

        while($row = $result->fetch_assoc()) {
            $facturas[] = new Factura($row['id'],$row['id_usuario'],$row['id_presupuesto'],$row['fecha'],$row['estado'],$row['total']);
        }
        return $facturas;
    }

    
}
?>