package vocs.com.vocs;

import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.app.Application;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import java.util.ArrayList;

import static android.R.attr.data;
import static android.R.attr.id;

public class Mots extends AppCompatActivity {

    DataBaseHelper myDB;
    Button retour,add;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_mots);

        ListView listView=(ListView) findViewById(R.id.listView);
        myDB=new DataBaseHelper(this);

        myDB.open();

        Bundle b = getIntent().getExtras();
        int value = -1;

        if(b != null) {
            value = b.getInt("key");
            System.out.println(value);
        }
        retour=(Button) findViewById(R.id.retour);
        add=(Button) findViewById(R.id.add);

        retour.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent versliste = new Intent (Mots.this, ViewListContents.class);
                startActivity(versliste);
            }
        });

       /* add.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent versajout = new Intent (Mots.this, AjoutMots.class);
                startActivity(versajout);
            }
        });*/

        ArrayList<String> theList=new ArrayList<>();
        Cursor data=myDB.getListContents2();

        if(data.getCount()==0){
            Toast.makeText(Mots.this,"aucun mot trouvé",Toast.LENGTH_LONG).show();
        }else{
            while(data.moveToNext()){
                theList.add(data.getString(1));
                ListAdapter listadapter = new ArrayAdapter<>(this,android.R.layout.simple_list_item_1,theList);
                listView.setAdapter(listadapter);


            }
        }myDB.close();
    }
}
