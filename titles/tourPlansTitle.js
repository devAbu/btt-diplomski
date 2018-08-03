var obj, dbParam, xmlhttp, x, txt = "";
var i = 0;
var otherPlaces = []
obj = {
    "table": "tourplan"
};
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("demo").innerHTML = "All data: " + this.responseText;
        var myObj = JSON.parse(this.responseText);
        for (x in myObj) {
            txt += myObj[x].title + " ";
            i++;
            otherPlaces.push(myObj[x].title)
            otherPlaces.push(myObj[x].type)
        }
        console.log(otherPlaces)
        console.log(i)

        $("#search-loged").autocomplete({
            source: otherPlaces,
            select: function (event, ui) {
                var search = $('#search-loged').val();
                console.log(search);
                console.log('abu')
                $('#form').submit();
            }
        });
    }
}
xmlhttp.open("GET", "title/carAndTourTitle.php?x=" + dbParam, true);
xmlhttp.send();