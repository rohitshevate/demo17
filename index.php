<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example for Data Class</title>
</head>
<body>
<select id="sel">
        <option value="">-- Select --</option>
    </select>
   
    <div class="table">
            <table>
                <tbody id="third">
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>           
                </tbody>
            </table>
        </div>
    <script src="jquery-3.5.1.min.js"></script>
    <script>
        let base_url = "http://localhost/student.php";

        $("document").ready(function(){
            getMenuNameList();
            getMenuById(877);
         });

        function getMenuNameList() {
            let url = base_url + "?req=name_list";
            $.get(url,function(data,success){
        
        for (const item in data) {
                let temp = data[item].name.toLowerCase();
                let opt=document.createElement("option");
                opt.textContent=temp;
                opt.value=item;
                document.querySelector('#sel').appendChild(opt);
    
            }
    });
}
    

            function getMenuById(id) {
          
            let url = base_url + "?req=menu_data&id="+id;
            $.get(url,function(data,success){
                console.log(data.length);
                console.log(data);
            });
        }
    
    </script>
</body>
</html>
