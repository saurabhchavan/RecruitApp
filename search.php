<?php
session_start();
if($_SESSION["loggedIn"] != true) {
    echo("Access denied!");
    exit();
}
echo '<a href="logout.php">Logout</a>';

?>

<!doctype html>
<html ng-app="RecruitApp">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="js/recruit.js"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <h2 style="margin-left: 35%;">Recruit App GitHub</h2>

    <div style="width:100%; margin-left: 15%;" ng-controller="RecruitAppController as vm" class="box">
        <input style="margin-left: 18%; padding:6px 15px 6px 30px;" ng-model="search">
        <button ng-click="vm.searchname(search)">Find user on GitHub</button>

        <br>
        <br>

        <div class="div1">
            <strong>UserName</strong>
            <br>
            <table>
                <tr ng-repeat="user in vm.response.items">
                    <td>
                        <img id="myImg" ng-src="{{user.avatar_url}}" width="50" height="50"> {{user.login}}
                        <button ng-model="repos" ng-click="vm.searchrepo(user.login)">Repos</button>
                    </td>
                </tr>
            </table>
        </div>

        <div class="div2"> <strong>Repositories</strong>
            <br>
            <li ng-repeat="repo in vm.userarr track by $index">
                {{repo}}
                <button href="#" ng-click="showDetails = ! showDetails">Add Notes </button>
                <div class="procedure-details" ng-show="showDetails">
                    <p>
                        <form action="/addnotes" method="POST">
                            <textarea type="text" name="note" placeholder="add notes" rows="4" cols="50">
                            </textarea>
                    </p>
                    <button disabled type="submit" name="login" class="login login-submit" value="submit">Submit Note</button>
                    <!--  <button ng-model="notes" ng-click="vm.addnote(repo.login)">Submit Note</button> -->
                    </form>
                </div>

                <div id="welcomeDiv" style="display:none;" class="answer_list">
                    <input type="textbox" />
                </div>
        </div>

    </div>
</body>

</html>