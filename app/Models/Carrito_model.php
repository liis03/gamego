<?

namespace App\Models;

use CodeIgniter\Model;

class Carrito_model extends Model
{
    //Atributos de la clase
    protected $table = 'carrito';
    protected $primaryKey = 'id';
    protected $allowedAFields = ['id_usuario','producto_id','tipo_producto','cantidad'];

    public function agregarAlCarrito($data)
    {
        $this->insert($data);
        $this->actualizarTotales($data,'id_usuario');

    }

    public function eliminarDelCarrito($carritoId, $usuarioId)
    {
        $this->delete($carritoId);
        $this->actualizarTotales($usuarioId);
    }

    public function actualizarTotales($usuarioId)
    {
        $carrito = $this->where('id_usuario', $usuarioId)->findAll();

        $cantidadTotal = 0;
        $costoTotal = 0;

        // recorrer todos los elementos en el carrito, sumando cantidades y calcula el costo total
        foreach ($carrito as $item) {
            $cantidadTotal += $item['cantidad'];
            $precioProducto = $this->obtenerPrecioProducto($item['producto_id'], $item['tipo_producto']);
            $costoTotal    += $item['cantidad']*$precioProducto;

        }

        // Actualizar el carrito con los nuevos totales
        $this->set(['cantidad_total' => $cantidadTotal, 'costo_total'=>$costoTotal])
            ->where('id_usuario',$usuarioId)
            ->update();
    }

    public function obtenerPrecioProducto($productoId,$tipoProducto)
    {
        // dado un producto, seleccionar en que seccion se encuentra
        switch($tipoProducto) {
            case 'videojuegos' :
                $videojuegoModel = new Videojuegos_model();
                $videojuego = $videojuegoModel->find($productoId);
                return $videojuego['precio'];
            // case 'consolas' :
            //     $consolasModel = new Consolas_model();
            //     $videojuego = $videojuegoModel->find($productoId);
            //     return $videojuego['precio'];
            // case 'accesorios' :
            //     $videojuegoModel = new Videojuegos_model();
            //     $videojuego = $videojuegoModel->find($productoId);
            //     return $videojuego['precio'];
            // case 'digital' :
            //     $videojuegoModel = new Videojuegos_model();
            //     $videojuego = $videojuegoModel->find($productoId);
            //     return $videojuego['precio'];
            default:
            // Manejar el caso
                return 0;
        }
    }

}