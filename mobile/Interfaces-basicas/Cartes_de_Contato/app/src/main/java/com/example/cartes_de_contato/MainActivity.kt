package com.example.cartes_de_contato

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.cartes_de_contato.ui.theme.Cartões_de_ContatoTheme
import androidx.compose.material3.CardDefaults


class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Cartões_de_ContatoTheme{
                Combinar()
            }
        }
    }
}

@Composable
fun Combinar() {
    Surface(
        modifier = Modifier.fillMaxSize(),
        color = Color(0xFF546E7A)
    ) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally,

        ) {
            Exibicao()
            Spacer(modifier = Modifier.height(100.dp))
            MyApp()
        }
    }
}
@Composable
fun Exibicao() {
    Card(
        modifier = Modifier
            .padding(40.dp)
            .fillMaxWidth(),
        colors = CardDefaults.cardColors(
            containerColor = Color(0xFFFFF59D)
        )
    ) {
        Text(
            text = "Nome: Maria Souza\nTel: (21) 98888-8888\nEmail: maria@email.com",
            style = TextStyle(color = Color.Black, fontSize = 20.sp),
            modifier = Modifier.padding(16.dp)
        )
    }
}

@Composable
fun MyApp() {
    Card(
        modifier = Modifier
            .padding(40.dp)
            .fillMaxWidth(),
        colors = CardDefaults.cardColors(
            containerColor = Color(0xFFFFCCBC)
        )
    ) {
        Text(
            text = "Nome: João Silva\nTel: (11) 99999-9999\nEmail: joao@email.com",
            style = TextStyle(color = Color.Black, fontSize = 20.sp),
            modifier = Modifier.padding(16.dp)
        )
    }
}


@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    Cartões_de_ContatoTheme {
        Combinar()
    }
}