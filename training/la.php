<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>LearnUpon Anywhere</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <style>
            body {
                margin: 0;
                height: 100vh;
            }
            
            iframe {
                border-style: none;
                height: 100vh;
            }
        </style>
        <script>
            function launchLMS() {
                let time = document.getElementById('time').textContent;
                time = time.trim();

                let SSOToken = document.getElementById('SSOToken').textContent;
                SSOToken = SSOToken.trim();

                launchURL = "https://training.kevincampbell.xyz/sqsso?Email=kevin.cam@luptest.com&TS=" + time + "&SSOToken=" + SSOToken + "&redirect_uri=/enrollments/174042210";

                var formElements = []; // Represents all the elements a form will have
                var form = document.createElement('form');
                form.setAttribute('method', 'post');
                form.setAttribute('action', launchURL);
                form.setAttribute('target', 'luEmbedIframe'); // You'll need a target so iFrame knows what to use
                form.setAttribute('id', 'luEmbedForm')


                // Create each element need for your type of authentication, aka SSO or SAML, and push them to the array
                // In the example of SSO, you would need inputs for Email, TS, SSOToken, forEmbed and redirect_uri
                // Here only 'forEmbed' param is pushed
                var forEmbed = document.createElement('input');
                forEmbed.setAttribute('type', 'text');
                forEmbed.setAttribute('name', 'forEmbed');
                forEmbed.setAttribute('value', 'true');
                formElements.push(forEmbed);


                var submitBtn = document.createElement('input');
                submitBtn.setAttribute('type', 'submit');
                submitBtn.setAttribute('value', 'Submit');
                formElements.push(submitBtn)


                // Push all the elements needed into the form
                formElements.forEach(item => form.appendChild(item));


                var mainForm = document.getElementById('luEmbedFormDiv');
                if (mainForm) {
                    mainForm.innerHTML = '';
                    mainForm.appendChild(form); // Append the form to HTML
                }

                var iframe = document.createElement('iframe');
                iframe.setAttribute('style', 'width: 100%;');
                iframe.setAttribute('scrolling', 'yes');
                iframe.setAttribute('allowFullScreen', 'true');
                iframe.setAttribute('name', 'luEmbedIframe');
                iframe.setAttribute('allow', 'camera *; microphone *');// We need this in case you have allowed Learners to record assignment videos. Altho, we suggest allowing only your portals subdomain here.


                var main = document.getElementById('main');
                if (main) {
                    main.innerHTML = '';
                    main.appendChild(iframe);// Append the iFrame

                    var embededForm = document.getElementById('luEmbedForm');
                    embededForm.submit();// Submit the form
                    mainForm.innerHTML = '';// Remove the form from HTML
                }
            }
        </script>
    </head>
    <body onload="launchLMS();">
        <div id="SSOToken" style="display: none;">
            63708fa1a82c15b87ebd97e81becb2df0716f373f8bfa83167921ffc157da0a6        </div>

        <div id="time" style="display: none;">
            1692697510        </div>

        <div style="display: none;" id="luEmbedFormDiv">

        </div>

        <div id="main">
            
        </div>
    </body>
</html>