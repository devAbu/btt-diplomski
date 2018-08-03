var obj, dbParam, xmlhttp,x , txt = "";
        var i = 0;
        var otherPlaces = []
        obj = { "table":"apartment" };
        dbParam = JSON.stringify(obj);
        xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("demo").innerHTML = "All data: " + this.responseText;
                var myObj = JSON.parse(this.responseText);
                for (x in myObj) {
                    txt += myObj[x].title +" ";
                    i++;
                    otherPlaces.push(myObj[x].title)
                }
                console.log(otherPlaces)
                console.log(i)

                $("#search-loged").autocomplete({
                    source: otherPlaces,
                    select: function(event, ui){
                        var search = $('#search-loged').val()
                        console.log(search);
                        $('#form').submit();
                    }
                });
            }
        }
        xmlhttp.open("GET", "title/apartmentAndHotelTitle.php?x=" + dbParam, true);
        xmlhttp.send();