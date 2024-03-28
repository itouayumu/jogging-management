@extends('layouts.user')

@section('title','Index')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/calendar.css') }}">
@section('content')
<body>
    <div class="back">
        <div class=selecter>
            <h2 class="title_calender">カレンダー</h2>
            <div class="calendar">
                <div id="calendar"></div>
        </div>
            <label for="year">西暦:</label>
            <input type="number" id="year" name="year" value="{{ date('Y') }}">
            <label for="month">月:</label>
            <input type="number" id="month" name="month" min="1" max="12" value="{{ date('n') }}" onchange="showOtherMonthCalendar()">
    </div>


<script>
    // カレンダーを表示する関数
    function showCalendar(year, month) {
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const firstDayIndex = new Date(year, month, 1).getDay();
        const lastDayIndex = new Date(year, month, daysInMonth).getDay();
        
        const weekdays = ["日", "月", "火", "水", "木", "金", "土"];

        const calendar = document.getElementById("calendar");

        let html = "<table><tr>";
        weekdays.forEach(day => {
            html += "<th>" + day + "</th>";
        });
        html += "</tr><tr>";
        
        // 空白セルを追加
        for (let i = 0; i < firstDayIndex; i++) {
            html += "<td></td>";
        }

        // 日付を追加
        for (let i = 1; i <= daysInMonth; i++) {
            // 曜日のインデックス(0が日曜日、1が月曜日、...、6が土曜日)
            const dayIndex = new Date(year, month, i).getDay();
            let cellClass = '';
            // 土曜日の場合
            if (dayIndex === 6) {
                cellClass = 'saturday';
            }
            // 日曜日の場合
            else if (dayIndex === 0) {
                cellClass = 'sunday';
            }

            html += `<td class="${cellClass}"><a href="data?sort=${year}-${month + 1}-${i}" >${i}</a></td>`;
            if ((i + firstDayIndex) % 7 === 0) {
                html += "</tr><tr>";
            }
        }

        // 空白セルを追加
        for (let i = lastDayIndex + 1; i % 7 !== 0; i++) {
            html += "<td></td>";
        }

        html += "</tr></table>";
        
        calendar.innerHTML = html;
    }

   // カレンダーを表示する関数を呼び出す
function showOtherMonthCalendar() {
    const year = parseInt(document.getElementById("year").value);
    const month = parseInt(document.getElementById("month").value) - 1; // 月は0から始まるため
    
    showCalendar(year, month);
}

// 初期表示
showOtherMonthCalendar();

// 年の入力フィールドが変更されたときにカレンダーを更新する
document.getElementById("year").addEventListener("change", showOtherMonthCalendar);
</script>
</div>
<div id="iddf545fcb055a6" a='{"t":"g7bs","v":"1.2","lang":"ja","locs":[],"ssot":"c","sics":"ds","cbkg":"#FFFFFF","cfnt":"#000000","cend":"#FFFFFF00"}'><a href="https://sharpweather.com/widgets/">Weather widget html for website by sharpweather.com</a></div><script async src="https://static1.sharpweather.com/widgetjs/?id=iddf545fcb055a6"></script>
@endsection


