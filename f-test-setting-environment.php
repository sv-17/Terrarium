<?php
session_start();
include('include/config.php');



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>F-TestSettingEnvironment - Jovial Candid Aardvark</title>
    <meta
      property="og:title"
      content="F-TestSettingEnvironment - Jovial Candid Aardvark"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <style data-section-id="dropdown">
      [data-thq="thq-dropdown"]:hover > [data-thq="thq-dropdown-list"] {
          display: flex;
        }

        [data-thq="thq-dropdown"]:hover > div [data-thq="thq-dropdown-arrow"] {
          transform: rotate(90deg);
        }
    </style>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./f-test-setting-environment.css" rel="stylesheet" />

      <div class="-test-setting-environment-container">
        <header
          data-thq="thq-navbar"
          class="-test-setting-environment-navbar-interactive"
        >
          <img
            alt="logo"
            src="imagee.png"
            class="-test-setting-environment-logo"
          />
          <div
            data-thq="thq-navbar-nav"
            data-role="Nav"
            class="-test-setting-environment-desktop-menu"
          >
            <div
              data-thq="thq-dropdown"
              class="-test-setting-environment-thq-dropdown list-item"
            >
              <div
                data-thq="thq-dropdown-toggle"
                class="-test-setting-environment-dropdown-toggle"
              >
                <span class="-test-setting-environment-text">Hi admin!</span>
                <img
                  alt="profilepic"
                  src="https://images.unsplash.com/photo-1602233158242-3ba0ac4d2167?ixid=Mnw5MTMyMXwwfDF8c2VhcmNofDF8fGdpcmx8ZW58MHx8fHwxNjgzNzQyMDY3&amp;ixlib=rb-4.0.3&amp;w=200"
                  class="-test-setting-environment-image"
                />
              </div>
              <ul
                data-thq="thq-dropdown-list"
                class="-test-setting-environment-dropdown-list"
              >
                <li
                  data-thq="thq-dropdown"
                  class="-test-setting-environment-dropdown1 list-item"
                >
                  <a href="a-admin-dashboard.php">
                    <div
                      data-thq="thq-dropdown-toggle"
                      class="-test-setting-environment-dropdown-toggle2"
                    >
                      <span class="-test-setting-environment-text02">
                        View Profile
                      </span>
                    </div>
                  </a>
                </li>
                <li
                  data-thq="thq-dropdown"
                  class="-test-setting-environment-dropdown2 list-item"
                >
                  <a href="index.php">
                    <div
                      data-thq="thq-dropdown-toggle"
                      class="-test-setting-environment-dropdown-toggle3"
                    >
                      <span class="-test-setting-environment-text03">
                        Log Out
                      </span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div
            data-thq="thq-burger-menu"
            class="-test-setting-environment-burger-menu"
          >
            <svg viewBox="0 0 1024 1024" class="-test-setting-environment-icon">
              <path
                d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
              ></path>
            </svg>
          </div>
          <div
            data-thq="thq-mobile-menu"
            class="-test-setting-environment-mobile-menu"
          >
            <div class="-test-setting-environment-icon-group">
              <svg
                viewBox="0 0 950.8571428571428 1024"
                class="-test-setting-environment-icon02"
              >
                <path
                  d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                ></path></svg
              ><svg
                viewBox="0 0 877.7142857142857 1024"
                class="-test-setting-environment-icon04"
              >
                <path
                  d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                ></path></svg
              ><svg
                viewBox="0 0 602.2582857142856 1024"
                class="-test-setting-environment-icon06"
              >
                <path
                  d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                ></path>
              </svg>
            </div>
          </div>
        </header>
        <form id="quizdetail" action="f-quiz-publish.php" method="post" onsubmit="submitForm(event)">
        <div class="-test-setting-environment-container01">
          <div class="-test-setting-environment-container02">
            <span class="-test-setting-environment-text04">
              Create Quiz
            </span>
            <div class="-test-setting-environment-container03">
              <div class="-test-setting-environment-container04">
                <div class="-test-setting-environment-container05">
                  <span class="-test-setting-environment-text05">
                    Assessment Name
                  </span>
                  <input
                    type="text"
                    required=""
                    name ="test_pub_name"
                    placeholder="Enter Title"
                    class="-test-setting-environment-textinput input"
                  />
                </div>
                <div class="-test-setting-environment-container06">
                  <span class="-test-setting-environment-text06">
                    Number of Questions
                  </span>
                  <input type="number" id="numCheckboxes" name="numCheckboxes" min="1" max="100" placeholder="1"
                    required=""
                    class="-test-setting-environment-select Content"
                    name="num_ques"
                  >
                </div>
              </div>
              <!-- <div class="-test-setting-environment-container07">
                <div class="-test-setting-environment-container08">
                  <span class="-test-setting-environment-text07">
                    Available from
                  </span>
                  <input type="datetime-local" name="availfrom"
                    required=""
                    class="-test-setting-environment-select1 Content"
                  >

                </div>
                <div class="-test-setting-environment-container09">
                  <span class="-test-setting-environment-text08">
                    Available till
                  </span>
                  <input input type="datetime-local" name="availtill"
                    required=""
                    class="-test-setting-environment-select2 Content"
                  >
                </div>
              </div> -->
              <div class="-test-setting-environment-container10">
                <div class="-test-setting-environment-container11">
                  <span class="-test-setting-environment-text09">
                    Time limit (in minutes)
                  </span>
                  <input type="number" name="timemins" min="1" max="300" placeholder="1"
                    required=""
                    class="-test-setting-environment-select3 Content"
                    name = "time_lim"
                  >
                </div>
                <div class="-test-setting-environment-container12">
                  <span class="-test-setting-environment-text10">Company</span>
                  <select required="" class="-test-setting-environment-select4" name="company_pub">
                    <option value="google">Google</option>
                    <option value="amazon">Amazon</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="-test-setting-environment-container13">
              <div class="-test-setting-environment-container14">
                
                <button type="submit" id= "publishquiz" class="-test-setting-environment-navlink3 button" style="display:none;">
                  <span class="-test-setting-environment-text13">
                    Publish Quiz&nbsp;
                  </span>
                </a>
                </button>               
              </div>
              <div class="-test-setting-environment-container15">
                <div class="-test-setting-environment-container16">
                  <div class="-test-setting-environment-container17">
                    <div class="-test-setting-environment-container22">
                      <div class="checkbox checkbox-primary">
                        <input id="check3" class="styled" type="checkbox">
                        <label for="check3">
                        
                        </label>
                    </div>
                    </div>
                    <div class="-test-setting-environment-container18 Content">
                      <div class="-test-setting-environment-container19">
                        <span class="-test-setting-environment-text15">
                          Question ID 1
                        </span>
                        <span class="-test-setting-environment-text16">
                          Which type of topology is best suited for large
                          businesses which must carefully control and coordinate
                          the operation of distributed branch outlets?
                        </span>
                        <div class="-test-setting-environment-container20">
                          <span class="-test-setting-environment-text17">
                            A. Ring
                          </span>
                          <span class="-test-setting-environment-text18">
                            B.Local area
                          </span>
                          <span class="-test-setting-environment-text19">
                            C.Hierarchical
                          </span>
                          <span class="-test-setting-environment-text20">
                            D.Star
                          </span>
                        </div>
                        <div class="-test-setting-environment-container21">
                          <span class="-test-setting-environment-text21">
                            Correct Answer : D
                          </span>
                          <!-- <span class="-test-setting-environment-text23">
                            Easy
                          </span> -->
                        </div>
                      </div>
                    </div>
                    
                  </div>

                  <div class="-test-setting-environment-container17">
                    <div class="-test-setting-environment-container22">
                      <div class="checkbox checkbox-primary">
                        <input id="check3" class="styled" type="checkbox">
                        <label for="check3">
                        
                        </label>
                    </div>
                    </div>
                    <div class="-test-setting-environment-container18 Content">
                      <div class="-test-setting-environment-container19">
                        <span class="-test-setting-environment-text15">
                          Question ID 2
                        </span>
                        <span class="-test-setting-environment-text16">
                          In phase lock which parameter is synchronized?
                        </span>
                        <div class="-test-setting-environment-container20">
                          <span class="-test-setting-environment-text17">
                            A. Frequency
                          </span>
                          <span class="-test-setting-environment-text18">
                            B.Phase
                          </span>
                          <span class="-test-setting-environment-text19">
                            C.Frequency and Phase
                          </span>
                          <span class="-test-setting-environment-text20">
                            D.None
                          </span>
                        </div>
                        <div class="-test-setting-environment-container21">
                          <span class="-test-setting-environment-text21">
                            Correct Answer : C
                          </span>
                          <!-- <span class="-test-setting-environment-text23">
                            Medium
                          </span> -->
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="-test-setting-environment-container17">
                    <div class="-test-setting-environment-container22">
                      <div class="checkbox checkbox-primary">
                        <input id="check3" class="styled" type="checkbox">
                        <label for="check3">
                        
                        </label>
                    </div>
                    </div>
                    <div class="-test-setting-environment-container18 Content">
                      <div class="-test-setting-environment-container19">
                        <span class="-test-setting-environment-text15">
                          Question ID 3
                        </span>
                        <span class="-test-setting-environment-text16">
                          In message passing a process receives information by executing the
                        </span>
                        <div class="-test-setting-environment-container20">
                          <span class="-test-setting-environment-text17">
                            A. Send
                          </span>
                          <span class="-test-setting-environment-text18">
                            B.Send Primitive
                          </span>
                          <span class="-test-setting-environment-text19">
                            C.Receive
                          </span>
                          <span class="-test-setting-environment-text20">
                            D.Receive Primitive
                          </span>
                        </div>
                        <div class="-test-setting-environment-container21">
                          <span class="-test-setting-environment-text21">
                            Correct Answer : A
                          </span>
                          <!-- <span class="-test-setting-environment-text23">
                            Easy
                          </span> -->
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="-test-setting-environment-container17">
                    <div class="-test-setting-environment-container22">
                      <div class="checkbox checkbox-primary">
                        <input id="check3" class="styled" type="checkbox">
                        <label for="check3">
                        
                        </label>
                    </div>
                    </div>
                    <div class="-test-setting-environment-container18 Content">
                      <div class="-test-setting-environment-container19">
                        <span class="-test-setting-environment-text15">
                          Question ID 4
                        </span>
                        <span class="-test-setting-environment-text16">
                          A topology that is responsible for describing the geometric arrangement of components that make up the LAN
                        </span>
                        <div class="-test-setting-environment-container20">
                          <span class="-test-setting-environment-text17">
                            A. Complex
                          </span>
                          <span class="-test-setting-environment-text18">
                            B.Physical
                          </span>
                          <span class="-test-setting-environment-text19">
                            C.Logical
                          </span>
                          <span class="-test-setting-environment-text20">
                            D.Incremental
                          </span>
                        </div>
                        <div class="-test-setting-environment-container21">
                          <span class="-test-setting-environment-text21">
                            Correct Answer : D
                          </span>
                          
                          <!-- <span class="-test-setting-environment-text23">
                            Easy
                          </span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
    </script>
    <script>
      var numberInput = document.getElementById("numCheckboxes");
      var checkboxes = document.querySelectorAll("input[type='checkbox']");

      // Add event listeners to the checkboxes
      checkboxes.forEach(function(checkbox) {
          checkbox.addEventListener("change", function() {
              var maxCount = parseInt(numberInput.value);
              var checkedCount = getCheckedCount();
              if (checkedCount < maxCount) {
                  var p1 = document.getElementById('publishquiz');
                  p1.style.display = "none"
              }
              else if (checkedCount == maxCount) {
                var p1 = document.getElementById('publishquiz');
                  p1.style.display = "block"

              }
              else if (checkedCount > maxCount) {
                  alert("You can only select " + maxCount + " checkboxes.");
                  this.checked = false;
              }
          });
      });

      // Function to get the count of checked checkboxes
      function getCheckedCount() {
          var count = 0;
          checkboxes.forEach(function(checkbox) {
              if (checkbox.checked) {
                  count++;
              }
          });
          return count;
      }

  
    </script>
    <script>

          function submitForm(event) {
            event.preventDefault(); // Prevents the default form submission behavior
            // Redirect to the action page
            window.location.href = document.getElementById("quizdetail").action;
          }
     
    </script>
  </body>
</html>
