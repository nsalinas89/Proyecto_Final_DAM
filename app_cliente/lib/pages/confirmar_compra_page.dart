import 'package:app_cliente/pages/venta_entrada_page.dart';
import 'package:app_cliente/providers/eventos_provider.dart';
import 'package:flutter/material.dart';

class ClientesAgregarPage extends StatefulWidget {
  @override
  State<ClientesAgregarPage> createState() => _ClientesAgregarPageState();
}

class _ClientesAgregarPageState extends State<ClientesAgregarPage> {
  TextEditingController rutCtrl = TextEditingController();
  TextEditingController nombreCtrl = TextEditingController();
  TextEditingController correoCtrl = TextEditingController();
  TextEditingController telefonoCtrl = TextEditingController();

  String errRut = '';
  String errNombre = '';
  String errCorreo = '';
  String errTelefono = '';

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Datos personales'),
        backgroundColor: Colors.red,
      ),
      body: Padding(
        padding: const EdgeInsets.all(8.0),
        child: Form(
          child: ListView(
            children: [
              campoRut(),
              mostrarError(errRut),
              campoNombre(),
              mostrarError(errNombre),
              campoCorreo(),
              mostrarError(errCorreo),
              campoTelefono(),
              mostrarError(errTelefono),
              botonAgregar(),
            ],
          ),
        ),
      ),
    );
  }


  Container mostrarError(String error) {
    return Container(
      width: double.infinity,
      child: Text(
        error,
        style: TextStyle(color: Colors.red),
      ),
    );
  }

  TextFormField campoRut() {
    return TextFormField(
      controller: rutCtrl,
      decoration: InputDecoration(
        labelText: 'Rut',
      ),
      keyboardType: TextInputType.number,
    );
  }

  TextFormField campoNombre() {
    return TextFormField(
      controller: nombreCtrl,
      decoration: InputDecoration(
        labelText: 'Nombre',
      ),
      
    );
  }

  TextFormField campoCorreo() {
    return TextFormField(
      controller: correoCtrl,
      decoration: InputDecoration(
        labelText: 'Correo',
      ),
      keyboardType: TextInputType.emailAddress,
    );
  }

  TextFormField campoTelefono() {
    return TextFormField(
      controller: telefonoCtrl,
      decoration: InputDecoration(
        labelText: 'Teléfono',
      ),
      keyboardType: TextInputType.number,
    );
  }

  Container botonAgregar() {
    return Container(
      margin: EdgeInsets.only(top: 10),
      width: double.infinity,
      child: ElevatedButton(
        style: ElevatedButton.styleFrom(
          primary: Colors.blue,
        ),
        child: Row(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Icon(Icons.add),
            Text('Realizar compra'),
          ],
        ),
        onPressed: () async {
          //caputar datos del form
          String rut_cliente= rutCtrl.text.trim();
          String nombre = nombreCtrl.text.trim();
          String correo = correoCtrl.text.trim();
          String telefono = telefonoCtrl.text.trim();

          //enviar por post al api
          var respuesta = await EventosProvider().agregar(rut_cliente, nombre, correo, telefono);

          //manejar errores
          if (respuesta['message'] != null) {
            var errores = respuesta['errors'];
            errRut = errores['rut_cliente'] != null? errores['rut_cliente'][0]: '';
            errNombre = errores['nombre_cliente'] != null ? errores['nombre_cliente'][0] : '';
            errCorreo = errores['correo_cliente'] != null ? errores['correo_cliente'][0] : '';
            errTelefono = errores['telefono_cliente'] != null ? errores['telefono_cliente'][0] : '';
            setState(() {});
            return;
          }
          Navigator.pop(context);
        },
        
      ),
    );
  }
}