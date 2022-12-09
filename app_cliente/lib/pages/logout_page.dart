import 'package:flutter/material.dart';

class logoutPage extends StatelessWidget {
  //const logoutPage({super.key});

  @override
  Widget build(BuildContext context) {
    return AlertDialog(
      
      title: Text("¿Desea cerrar sesión?"),
      actions: <Widget>[
        TextButton(onPressed: () => Navigator.pop(context, 'OK'),
              child: const Text('OK'),
        )
      ],
    );
  }
}