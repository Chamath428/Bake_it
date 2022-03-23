
    <div class="calendar">
        <div class="calendar-header">
            <form action="" method="POST">
                 <label for="selectdate"></label>
                 <input type="date" id="selectdate" name="selectdate">
            </form>
            <input class="month-picker" id="month-picker"></input>
            <div class="year-picker">
                <span class="year-change" id="prev-year">
                    <pre><</pre>
                </span>
                <span id="year">2021</span>
                <span class="year-change">
                    <pre>></pre>
                </span>
               
                <!-- <span class="year-change" id="next-year">
                    <pre>></pre>
                </span> -->
            </div>
        </div>
        <div class="calendar-body">
            <div class="calendar-week-day">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            <div class="calendar-days" id ="selected-date"></div>
        </div>
        <div class="month-list"></div>
       
    </div>



