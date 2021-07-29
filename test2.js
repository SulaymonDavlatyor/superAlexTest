// Исходил из того что по аяксу получу таблицу заказов в виде двумерного массива

$.ajax({
    url: "https://example.com/getTables",
    type: 'GET',
    dataType: 'json',
    success: function(res) {

        let tables = JSON.parse(res);
        let result =' <table>  ' +
            '<tr>' +
            '    <th>first</th>' +
            '    <th>second</th>' +
            '    <th>third</th>' +
            '  </tr>'

        tables.forEach((table)=>{
            let tmpTable = '';
            table.forEach((order) => {
                tmpTable += '<td>' + order + '</td>';
            })
            result += '<tr>' + tmpTable + '</tr>';
            });

        result += '</table>'

        $('body').append(result);
    },
    fail: function (){
            alert("fail");
    }
});