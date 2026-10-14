package sp.senai.br.wineappraiser;

import android.content.Intent;
import android.os.Bundle;
import android.os.StrictMode;
import android.view.View;
import android.widget.EditText;
import android.widget.RatingBar;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class Cadastrar extends AppCompatActivity {
    String sIP = " 10.87.230.135"; // ip do computador do SENAI
    EditText etNome, etOrigem, etTipo;
    RatingBar rbNota;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_cadastrar);
        StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();
        StrictMode.setThreadPolicy(policy);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });

        etNome = findViewById(R.id.etNome);
        etOrigem = findViewById(R.id.etOrigem);
        etTipo = findViewById(R.id.etTIpo);
        rbNota = findViewById(R.id.rbNota);
    }

    public void salvar(View s){

    }

    public void voltarView(View data){
        Intent it = new Intent(Cadastrar.this, MainActivity.class);
        startActivity(it);
        finish();
    }
}