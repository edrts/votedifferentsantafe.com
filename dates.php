<?php include_once 'includes/functions.php'; ?>
    <!doctype html>
    <html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js">
    <?php include_once 'includes/head.php'; ?>

    <body>

    <div class="jumbotron">
        <div class="container">
            <h1>Vote Different Santa Fe!</h1>
            <h2>Our New ranked-choice ballot</h2>
        </div>
    </div>

    <?php
    include 'layouts/navigation.php';
    include 'layouts/dates.php';


    include 'layouts/footer.php'; ?>
    </body>
    <?php include 'includes/footer-scripts.php'; ?>
    <script>
        //Calendar Init
        var events = [

            {
                'Date': new Date(2018, 0, 9),
                'Title': '<span class="title">Public Forum</span><span class="time">6:30pm-8:30pm</span><span class="location"><a href="https://www.google.com/maps/place/Genoveva+Chavez+Community+Center/" target="_blank"><i class="fas fa-external-link"></i> Genoveva Chavez Center (District 4) 3221 Rodeo Road</a></span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2018, 0, 16),
                'Title': '<span class="title">Public Forum</span><span class="time">6pm-8pm</span><span class="location"><a href="https://www.google.com/maps/place/Santa+Fe+Public+Library+-+Southside+Branch/" target="_blank"><i class="fas fa-external-link"></i> Southside Library (District 3) 6599 Jaguar Drive</a></span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2018, 0, 20),
                'Title': '<span class="title">Public Forum</span><span class="time">2pm-4pm</span><span class="location"><a href="https://www.google.com/maps/place/Santa+Fe+Public+Library/" target="_blank"><i class="fas fa-external-link"></i> Main Library (District 1) 145 Washington Avenue</a></span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2018, 0, 20),
                'Title': '<span class="title">Public Forum</span><span class="time">10am-12noon</span><span class="location"><a href="https://www.google.com/maps/place/Center+for+Progress+and+Justice/" target="_blank"><i class="fas fa-external-link"></i> Center for Progress and Justice, 1420 Cerrillos Road</a></span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2018, 0, 30),
                'Title': '<span class="title">Start of absentee voting my mail and in-person</span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2018, 1, 6),
                'Title': '<span class="title">Last day to register to vote.</span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2018, 1, 8),
                'Title': '<span class="title">Mock Election</span><span class="time">12noon - 1:30pm</span><span class="location"><a href="https://www.google.com/maps/place/Second+Street+Brewery/" target="_blank"><i class="fas fa-external-link"></i> Second Street Brewery, 1814 2nd Street</a></span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2018, 1, 14),
                'Title': '<span class="title">Early voting starts</span>',
                // 'Link': function(){}
            },

            {
                'Date': new Date(2018, 1, 15),
                'Title': '<span class="title">Mock Election</span><span class="time">12noon-1:30pm</span><span class="location"><a href="https://www.google.com/maps?q=Second+Street+Brewery+Rufina+Taproom" target="_blank"><i class="fas fa-external-link"></i> Second Street Brewery Rufina Taproom, 2920 Rufina Street</a></span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2018, 2, 6),
                'Title': '<span class="title">Election Day</span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2019, 9, 8),
                'Title': '<span class="title">Absentee Voting Begins</span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2019, 9, 12),
                'Title': '<span class="title">Ranked Choice Voting Refresher</span><span>10:00 a.m.</span><span>La Farge Library, 1730 Llano St.</span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2019, 9, 19),
                'Title': '<span class="title">Early Voting Begins</span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2019, 10, 2),
                'Title': '<span class="title">Early Voting Ends</span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2019, 10, 2),
                'Title': '<span class="title">Absentee Voting Ends</span>',
                // 'Link': function(){}
            },
            {
                'Date': new Date(2019, 10, 5),
                'Title': '<span class="title">Election Day</span>',
                // 'Link': function(){}
            }


//
//  February 15th at Second Street Brewery Rufina Taproom 2920 Rufina Street 12 through 1:30PM.



        ];
        var settings = {
            Color: 'rgba(204, 69,39, 1)',              //(string - color) font color of whole calendar.
            LinkColor: 'rgba(204, 69,39, 1)',          //(string - color) font color of event titles.
            NavShow: true,              //(bool) show navigation arrows.
            NavVertical: false,         //(bool) show previous and coming months.
            // NavLocation: '#foo',        //(string - element) where to display navigation, if not in default position.
            DateTimeShow: true,         //(bool) show current date.
            DateTimeFormat: 'mmm, yyyy',//(string - dateformat) format previously mentioned date is shown in.
            // DatetimeLocation: '',       //(string - element) where to display previously mentioned date, if not in default position.
            EventClick: false,          //(function) a function that should instantiate on the click of any event. parameters passed in via data link attribute.
            EventTargetWholeDay: true,  //(bool) clicking on the whole date will trigger event action, as opposed to just clicking on the title.
            //DisabledDays: [],         //(array of numbers) days of the week to be slightly transparent. ie: [1,6] to fade Sunday and Saturday.
            //ModelChange: model        //(array of objects) new data object to pass into calendar (serving suggestion: passing through only the currently selected month's events if working with large dataset.
        }
        var element = document.getElementById('caleandar');
        caleandar(element, events, settings);

    </script>
    </html>
<?php //open php tag to avoid headers already sent
