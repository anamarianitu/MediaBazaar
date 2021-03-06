
<?php
  include ('header.php');
?>


<body class="schedule">
    <div class="container">
        <main>
            <!-- CONTENT OF SCHEDULE -->
        <!-- <h1>Schedule Page</h1> -->
        <br>
        <div class="calendar disable-selection" id="calendar">
            <div class="left-side">
                <div class="current-day text-center">
                    <h1 class="calendar-left-side-day"></h1>
                    <div class="calendar-left-side-day-of-week"></div>
                </div>
                <div class="current-day-events">
                    <div>Current Events:</div>
                    <ul class="current-day-events-list"></ul>
                </div>
                <div class="add-event-day">
                    <input type="text" class="add-event-day-field" placeholder="Create an Event">
                    <span class="fa fa-plus-circle cursor-pointer add-event-day-field-btn"></span>
                </div>
            </div>
            <div class="right-side">
                <div class="text-right calendar-change-year">
                    <div class="calendar-change-year-slider">
                        <span class="fa fa-caret-left cursor-pointer calendar-change-year-slider-prev"></span>
                        <span class="calendar-current-year"></span>
                        <span class="fa fa-caret-right cursor-pointer calendar-change-year-slider-next"></span>
                    </div>
                </div>
                <div class="calendar-month-list">
                    <ul class="calendar-month"></ul>
                </div>
                <div class="calendar-week-list">
                    <ul class="calendar-week"></ul>
                </div>
                <div class="calendar-day-list">
                    <ul class="calendar-days"></ul>
                </div>
            </div>
        </div>

        <script async src="../scripts/all.js"></script>
        </main>

        <?php
            include ('javascript.php');
        ?>

    </div>
</body>
</html>