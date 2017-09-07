$( document ).ready(function() {

    var date = $(".dateLine").attr("year")+"-"+$(".dateLine").attr("month");
    var objSearch = { "data" : {"range": { "date":{"gte": date+"-01","lte": date+"-30"}}}};

    sendRequest("list_events", objSearch, "GET", function(data){ listEvent(data); });

    function listEvent(data){

        $(".billList tr").remove();

        var result = JSON.parse(data.data);
        data = result.hits.hits;

        for( var i in data ){

            var teste = (data[i]._source.payed && data[i]._source.payed == 1) ? "payed" : "";

                // " + (data[i]._source.payed && data[i]._source.payed == 1) ? "payed" : "" + "

            var icon = (data[i]._source.type == 1)? "down" : "up";
            var body = "<td><i class='fa fa-thumbs-" + icon + "'></i></td>";
            body += "<td>" + data[i]._source.date + "</td>";
            body += "<td> R$ " + data[i]._source.value + "</td>";
            body += "<td>" + data[i]._source.description + teste + "</td>";
            body += "<td class='buttons'><i class='fa fa-pencil editar initialism' title='Edit'></i>";
            body += "<i class='fa fa-times excluir initialism' title='Remove'></i>";
            body += "<i class='fa fa-money registrarPagamento initialism' title='Mark payed'></i></td>";
            $(".billList").append("<tr eventId='" + data[i]._id + "' class='" + teste + "'>" + body + "</tr>");
        }

        calcList();

    }

    function sendRequest(route, obj, methodType, callBack){
        $.ajax({
            cache: false,
            url: "/" + route,
            data: obj,
            method: methodType,
            success: function(data){

                console.log(data);

                if(callBack){
                    callBack(data);
                }

                if(methodType != "GET"){
                    location.reload();
                }
            },
            error: function(data){

            }
        });
    }

    function calcList(){

        var entrance = 0;
        var out = 0;

        $(".billList tr").each(function(){
            if( $(this).find("td").eq(0).find("i").hasClass("fa-thumbs-up") ){
                entrance += parseFloat($(this).find("td").eq(2).text().substr(4));
            }else{
                out +=  parseFloat($(this).find("td").eq(2).text().substr(4));
            }
        });

        $(".positive").text(entrance);
        $(".negative").text(out);
        $(".result").text(entrance-out);
    }

    $("body").on("click", ".changeMonthList" , function(){

        var month = $(".dateLine").attr("month");
        var year = $(".dateLine").attr("year");

        if($(this).attr("ref") == "next"){
            if(month == 12){
                month = 01;
                year++;
            }else{
                month++;
            }
        }

        if($(this).attr("ref") == "prev"){
            if(month == 01){
                month = 12;
                year--;
            }else{
                month--;
            }
        }

        month = ("0" + month).slice(-2);

        $(".dateLine").attr("year", year);
        $(".dateLine").attr("month", month);
        $(".dateLine").text("date: " + month + " / " + year);
        date = year+"-"+month;
        objSearch = { "data" : {"range": { "date":{"gte": date+"-01","lte": date+"-30"}}}};

        sendRequest("list_events", objSearch, "GET", function(data){ listEvent(data); });
    });

    $(".formAddEvents").on("click", ".addEventsButton" , function(){
        var objEvent = {
            "description" : $(this).parent().find("#description").val(),
            "value" : $(this).parent().find("#value").val(),
            "date" : $(this).parent().find("#date").val(),
            "type" : $(this).parent().find(".type:checked").val(),
            "payed" : 0
        }

        sendRequest("add_events", objEvent, "POST");
    });

    $("body").on("click", ".registrarPagamento" , function(){
        var element = $(this).parents().eq(1).find("td");
        var objEvent = {
            "id" : $(this).parents().eq(1).attr("eventid"),
            "description" : $(element).eq(3).text(),
            "value" : $(element).eq(2).text().substr(4),
            "date" : $(element).eq(1).text(),
            "type" : ($(element).eq(0).find(".fa-thumbs-down").length > 0) ? 1 : 0,
            "payed" : 1
        }

        sendRequest("payed_bill", objEvent, "PUT");
    });
});
