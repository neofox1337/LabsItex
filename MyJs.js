var table = document.getElementsByTagName('table')[0];
var tmpminArr = new Array();
var tmpmaxArr = new Array();

for(i = 1; i < table.rows.length; i++)
{
    var minItem = parseFloat(table.rows[i].cells[5].innerHTML);
    var maxItem = parseFloat(table.rows[i].cells[3].innerHTML);
    if(!isNaN(minItem))
    {
        tmpminArr.push({value: minItem, number: i})
    }

    if(!isNaN(maxItem))
    {
        tmpmaxArr.push({value: maxItem, number: i});
    }
}

tmpminArr.sort(function(a,b){return a.value - b.value});
tmpmaxArr.sort(function(a,b){return a.value - b.value});
tmpmaxArr.reverse();

var tmpminDate = new Date(table.rows[tmpminArr[0].number].cells[2].innerHTML + "T00:00:00");
var tmpmaxDate = new Date(table.rows[tmpmaxArr[0].number].cells[2].innerHTML + "T00:00:00");

alert("Минимальная температура " + tmpminDate.toDateString() + ", " + tmpminArr + ", " + tmpminArr[0].value + " градусов Цельсия\nМаксимальная температура " + tmpmaxDate.toDateString() + ", " + tmpmaxArr[0].value + " градусов Цельсия");