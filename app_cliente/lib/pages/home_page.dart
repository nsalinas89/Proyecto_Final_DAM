import 'package:app_cliente/pages/historial_compras_page.dart';
import 'package:app_cliente/pages/login_page.dart';
import 'package:app_cliente/pages/noticias_page.dart';
import 'package:app_cliente/pages/venta_entrada_page.dart';
import 'package:flutter/material.dart';
import 'package:material_design_icons_flutter/material_design_icons_flutter.dart';


class homePage extends StatefulWidget {
  @override
  State<homePage> createState() => _homePageState();
}

class _homePageState extends State<homePage> {
  //const homePage({super.key});
  int paginaSel = 0;
  final paginas = [noticiasPage(),ventaEntradaPage(),historialComprasPage(),loginPage()];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: paginas[paginaSel],
      bottomNavigationBar: BottomNavigationBar(
        type: BottomNavigationBarType.shifting,
        currentIndex: paginaSel,
        onTap: (index) {
          setState(() {
            paginaSel = index;
          });
        },
        items: [
          BottomNavigationBarItem(
            icon: Icon(MdiIcons.newspaper),
            label: 'Noticias',
            backgroundColor: Colors.red
          ),
          BottomNavigationBarItem(
            icon: Icon(MdiIcons.ticket),
            label: 'Venta',
            backgroundColor: Colors.red
          ),
          BottomNavigationBarItem(
            icon: Icon(MdiIcons.history),
            label: 'Historial',
            backgroundColor: Colors.red
          ),
          BottomNavigationBarItem(
            icon: Icon(MdiIcons.logout),
            label: 'Cerrar sesión',
            backgroundColor: Colors.red
          ),
        ],
      ),
    );
  }
}