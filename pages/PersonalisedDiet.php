<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/Diet.css" />
    <title>News</title>
    </head>

    <body>
        <div class="back-btn-div">
        <a href="../index.php"><button class="back-btn" type="button">
                <lord-icon  
                    src="https://cdn.lordicon.com/jxwksgwv.json"
                    trigger="hover"
                    colors="primary:#121331"
                    style="width:50px;height:50px;transform: rotate(180deg);">         
                </lord-icon>
            Back</button></a>
        </div>

        <div class="personal-details">
            <div class="image">
                <img src="https://www.parents.com/thmb/gCbT_HYX_MUlj3kg5Y3Hr35U1Zg=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/550_101700658_L_w-94d5210c15f145eca19db4ad4cc2941a.jpg" alt="">
            </div>

            <div class="questions">

                <div>
                    <div class="options">
                        <label for="gender">Enter your gender:</label>
                        <select name="gender" id="gender">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female </option>
                        </select>
                    </div>

                    <div class="options">
                        <label for="weight">Enter your weight:</label>
                        <input type="text" id="weight">
                    </div>

                    <div class="options">
                        <label for="height">Enter your height:</label>
                        <input type="text" id="height">
                    </div>

                    <div class="options">
                        <label for="goal">Enter your goal:</label>
                        <input type="text" id="goal">
                    </div>

                    <div class="options">
                        <label for="current">Do you have a current diet plan:</label>
                        <select name="current" id="current">
                            <option value="none" selected disabled hidden>Select an Option</option>
                            <option value="Male">Yes</option>
                            <option value="Female">No </option>
                        </select>
                    </div>

                    <div class="futher, options">
                        <label for="preference">Any further preference:</label>
                        <textarea id="preference"></textarea>
                    </div>     
                </div>
                <div class="submit-btn-div">
                    <button type="submit" class="submit-btn">Submit</button>
                </div>
            </div>
        </div>
    </body>
</html>