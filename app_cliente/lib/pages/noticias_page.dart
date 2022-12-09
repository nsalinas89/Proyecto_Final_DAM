

import 'package:app_cliente/providers/eventos_provider.dart';
import 'package:flutter/material.dart';
import 'package:material_design_icons_flutter/material_design_icons_flutter.dart';
import 'package:intl/intl.dart';
import 'package:flutter_slidable/flutter_slidable.dart';

class noticiasPage extends StatefulWidget {
  const noticiasPage({Key? key}) : super(key: key);
  @override
  State<noticiasPage> createState() => _noticiasPageState();
}

class _noticiasPageState extends State<noticiasPage> {

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        leading: Icon(MdiIcons.newspaper,color: Colors.yellow,),
        backgroundColor: Colors.red,
        title: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            Text("Noticias"),
          ]
        ),
      ),
    );
  }
}