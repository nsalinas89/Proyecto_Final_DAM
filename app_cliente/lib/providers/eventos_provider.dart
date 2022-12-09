import 'dart:collection';
import 'dart:convert';

import 'package:http/http.dart' as http;

class EventosProvider {
  final apiURL = 'http://10.0.2.2:8000/api';

  Future<List<dynamic>> getEventos() async {
    var respuesta = await http.get(Uri.parse(apiURL + '/eventos'));

    if (respuesta.statusCode == 200) {
      return json.decode(respuesta.body);
    } else {
      return [];
    }
  }

  Future<List<dynamic>> getClientes() async {
    var respuesta = await http.get(Uri.parse(apiURL + '/clientes'));

    if (respuesta.statusCode == 200) {
      return json.decode(respuesta.body);
    } else {
      return [];
    }
  }

  Future<LinkedHashMap<String, dynamic>> agregar(String rut,
      String nombre, String correo,String telefono) async {
    var respuesta = await http.post(Uri.parse(apiURL + '/clientes'),
      headers: <String, String>{
        'Content-type': 'application/json',
        'Accept': 'application/json',
      },
      body: jsonEncode(<String, dynamic>{
        'rut_cliente': rut,
        'nombre_cliente': nombre,
        'correo_cliente': correo,
        'telefono_cliente': telefono,
      }),
    );

    return json.decode(respuesta.body);
  }
}


