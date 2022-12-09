import 'package:app_cliente/pages/confirmar_compra_page.dart';
import 'package:app_cliente/providers/eventos_provider.dart';
import 'package:flutter/material.dart';
import 'package:material_design_icons_flutter/material_design_icons_flutter.dart';

class ventaEntradaPage extends StatelessWidget {
  //const homePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        leading: Icon(MdiIcons.ticket,color: Colors.yellow,),
        backgroundColor: Colors.red,
        title: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text("Venta de entradas"),
          ]
        ),
      ),
      body: FutureBuilder(
        future: EventosProvider().getEventos(),
        builder: (context, AsyncSnapshot snapshot){
          if (!snapshot.hasData){
            return Center(
              child: CircularProgressIndicator(),
            );
          }
          return ListView.separated(
            separatorBuilder: (context, index) => Divider(
              thickness: 1.3,
            ),
            itemCount: snapshot.data.length,
            itemBuilder: (context, index){
              return ListTile(
                leading: Icon(MdiIcons.ticketConfirmation,color: Colors.orange,),
                title: Text(snapshot.data[index]['nombre_evento']),
                subtitle: Text('\$' + snapshot.data[index]['precio'].toString()),
                trailing: OutlinedButton(
                  child: Text('Comprar'),
                  onPressed: (){
                    MaterialPageRoute route = MaterialPageRoute(
                      builder: (context) => ClientesAgregarPage()
                    );
                    Navigator.push(context, route).then((value) => null);
                  },
                )
              );
            },
          );
        }
      ),
    );
  }
}