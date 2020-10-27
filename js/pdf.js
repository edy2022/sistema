 function tableToJson(table){
   var data = [];  
   
   var headers = [];  
   for (var i = 0; i<table.rows[0].cells.length; i++) {
       const element = array[index];
       headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi,'');
    }
    data.push(headers); 

    for (var i = 1; i <table.rows.length; i++) {
         
        var tableRow = table.rows[i];
        var rowData= {}; 

        for (var j = 0; j <tableROW.cells.length; j++) {
               rowData[ headers[j] ] = tableRow.cells[j].innerHTML;
            
        } 

           data.push(rowData);

    }

      return data;
}     




function callme() {
    var table = tableToJson($('#table-id').get(0));
    var doc = new jsPDF('1','pt','letter',true);
    
    doc.cellInitialize(); 

    $.each(table, function(i, row){
        $.each(row, function(j, cell){
         if (j=="nombre" | j==1) {
             doc.cell(1,10,190,20,cell,i);
         } else {
             doc.cell(1,10,90,20,cell,i);
         }
       




       })
    })

 doc.save('ventas.pdf');
    
}







 