package com.example.atividade1

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.padding
import androidx.compose.material3.Card
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.unit.dp
import com.example.atividade1.ui.theme.Atividade1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade1Theme {
                Surface(
                    modifier = Modifier.fillMaxHeight().fillMaxWidth(),color = MaterialTheme.colorScheme.tertiary
                    ) {
                        Column(
                            modifier = Modifier.fillMaxSize(),
                            verticalArrangement = Arrangement.Center,
                            horizontalAlignment = Alignment.CenterHorizontally
                        ) {

                            Card(modifier = Modifier.padding(55.dp))
                            {
                                Text(
                                    modifier = Modifier.padding(5.dp),
                                    text = "Nome: Matheus Martin Mota"
                                )
                                Text(
                                    modifier = Modifier.padding(5.dp),
                                    text = "Telefone: 99400-2892"
                                )
                                Text(
                                    modifier = Modifier.padding(5.dp),
                                    text = "Email: matheusmmota@gmail.com"
                                )
                            }
                            Card(modifier = Modifier.padding(25.dp)) {
                                Text(
                                    modifier = Modifier.padding(5.dp),
                                    text = "Nome: Rafael Lopes Cuan"
                                )
                                Text(
                                    modifier = Modifier.padding(5.dp),
                                    text = "Telefone: 99789-2356"
                                )
                                Text(
                                    modifier = Modifier.padding(5.dp),
                                    text = "Email: rafaellopescuan@gmail.com"
                                )
                            }
                        }
                    }

                }
            }
        }
    }

