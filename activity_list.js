window.onload = function () {
    var list_a = document.getElementsByClassName("list a")[0];
    var each_list = list_a.getElementsByClassName("each_list");
    var time_list = each_list[0].getElementsByTagName("li");
    for (var i = 1; i < time_list.length - 1; i++) {// -1是因为按日历查询特殊处理
        time_list[i].addEventListener("click", function () {
            newFilter("time", this.getAttribute("getid"));
        });
    }
    var status_list = each_list[1].getElementsByTagName("li");
    for (var i = 1; i < status_list.length; i++) {
        status_list[i].addEventListener("click", function () {
            newFilter("status", this.getAttribute("getid"));
        });
    }
    var theme_list = each_list[2].getElementsByTagName("li");
    for (var i = 1; i < theme_list.length; i++) {
        theme_list[i].addEventListener("click", function () {
            newFilter("theme", this.getAttribute("getid"));
        });
    }
    var type_list = each_list[3].getElementsByTagName("li");
    for (var i = 1; i < type_list.length; i++) {
        type_list[i].addEventListener("click", function () {
            newFilter("type", this.getAttribute("getid"));
        });
    }
    var host_list = each_list[4].getElementsByTagName("li");
    for (var i = 1; i < host_list.length; i++) {
        host_list[i].addEventListener("click", function () {
            newFilter("host", this.getAttribute("getid"));
        });
    }
    var location_list = each_list[5].getElementsByTagName("li");
    for (var i = 1; i < location_list.length; i++) {
        location_list[i].addEventListener("click", function () {
            newFilter("location", this.getAttribute("getid"));
        });
    }

    $(document).ready(function () {
        var startEndDay = getStartEndDay();
        var startDay;
        var endDay;
        console.log(startEndDay);
        if (startEndDay == null) {
            startDay = new Date();
            endDay = new Date();
        } else {
            startDay = startEndDay[0];
            endDay = startEndDay[1];
            console.log(endDay);
        }
        $('#demo').daterangepicker({
            "locale": {
                "direction": "ltr",
                "format": "YYYY/MM/DD",
                "separator": " - ",
                "applyLabel": "确定",
                "cancelLabel": "取消",
                "fromLabel": "From",
                "toLabel": "To",
                "customRangeLabel": "Custom",
                "daysOfWeek": [
                    "日",
                    "一",
                    "二",
                    "三",
                    "四",
                    "五",
                    "六"
                ],
                "monthNames": [
                    "一月",
                    "二月",
                    "三月",
                    "四月",
                    "五月",
                    "六月",
                    "七月",
                    "八月",
                    "九月",
                    "十月",
                    "十一月",
                    "十二月"
                ],
                "firstDay": 1
            },
            "startDate": startDay,
            "endDate": endDay,
        }, function (start, end, label) {
            console.log("New date range selected: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + " (predefined range: " + label + ")");
            newFilter("time", start.format('YYYY/MM/DD') + " - " + end.format('YYYY/MM/DD'));
        });
    });
}

function newFilter(field, value) {
    var newUrl = getNewUrl(field, value);
    window.location.replace(newUrl);
}

function getNewUrl(field, value) {
    var newUrl = window.location.href.split("?")[0] + "?";
    var query = window.location.search.substring(1);

    if (query == "") {
        newUrl = newUrl + field + "=" + value;
    } else {
        var vars = query.split("&");
        var hasField = false;
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (i > 0) newUrl = newUrl + "&";
            newUrl = newUrl + pair[0] + "=";
            if (pair[0] == field) {
                newUrl = newUrl + value;
                hasField = true;
            }
            else newUrl = newUrl + pair[1];
        }
        if (hasField == false) {
            newUrl = newUrl + "&" + field + "=" + value;
        }
    }
    return newUrl;
}

function getStartEndDay() {
    var query = window.location.search.substring(1);

    if (query == "") {
        return null;
    } else {
        var vars = query.split("&");
        var hasField = false;
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == "time" && pair[1].length > 16) {
                return pair[1].split("%20-%20");
            }
        }
        if (hasField == false) {
            return null;
        }
    }
    return null;
}

