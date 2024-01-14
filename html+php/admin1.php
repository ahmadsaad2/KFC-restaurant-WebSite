<?php
global $conn;
include("database.php");

$orderQuery = "SELECT COUNT(*) AS order_count FROM `order`";
$orderResult = $conn->query($orderQuery);
$orderCount = $orderResult ? $orderResult->fetch_assoc()['order_count'] : 0;

$userQuery = "SELECT COUNT(*) AS user_count FROM users";
$userResult = $conn->query($userQuery);
$userCount = $userResult ? $userResult->fetch_assoc()['user_count'] : 0;
$categoryQuery = "SELECT COUNT(*) AS category_count FROM `category`";
$categoryResult = $conn->query($categoryQuery);
$categoryCount = ($categoryResult) ? $categoryResult->fetch_assoc()['category_count'] : 0;


?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">

    <link rel='stylesheet' href='../css/admin.css'>
    <link rel="icon" href="../image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scal e=1.0">
    <title>KFC</title>
    <meta name="description" content=" KFC is the world's most popular chicken restaurant chain, which engraves on its banner the preparation of fresh and delicious chicken, combined with excellent service and innovation anywhere in the world">
    <script src="../script/admin.js"></script>
</head><body>

<div class="navvv">


    <nav>
        <div id="logo">
            <img src="../image/icom.png" style="object-fit: cover;
            width: 100px;
            height: 100px;">
        </div>


        <ul class="nav-links">
            <li><a class="Home" href="#Home">Home</a></li>
            <li><a href="#formed">Products</a></li>
            <li><a href="#formed2">Users</a></li>
            <li><a href="#formed1">iteam</a></li>
            <li><a href="mainpage.php">Sign out</a></li>
        </ul>
    </nav>
</div>

    <main>
        <h1 style="color: #0a0b0c; align-content: center; align-items: center;">KFC Dashbord Admin</h1>

        <div class="date">
            <input type="date" id="dateInput" >
        </div>

        <div class="insights">

            <!-- start seling -->
            <div class="sales">
                <span class="material-symbols-sharp">Order</span>
                <div class="middle">

                    <div class="left">
                        <h3>Number of Order per day</h3>
                        <h1><?php echo $orderCount; ?></h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle  r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number"><p>25%</p></div>
                    </div>

                </div>
                <small>Last 24 Hours</small>
            </div>
            <!-- end seling -->
            <!-- start expenses -->
            <div class="expenses">
                <span class="material-symbols-sharp">Sale</span>
                <div class="middle">

                    <div class="left">
                        <h3>Total Sales</h3>
                        <h1>$20</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle  r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number"><p>20%</p></div>
                    </div>

                </div>
                <small>Last 24 Hours</small>
            </div>
            <!-- end seling -->
            <!-- start seling -->
            <div class="income">
                <span class="material-symbols-sharp">Users</span>
                <div class="middle">

                    <div class="left">
                        <h3>Number of Users</h3>
                        <h1><?php echo $userCount; ?></h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle  r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number"><p>20%</p></div>
                    </div>

                </div>

            </div>
            <div class="income">
                <span class="material-symbols-sharp">Categories</span>
                <div class="middle">

                    <div class="left">
                        <h3>Number of Categories</h3>
                        <h1><?php echo $categoryCount; ?></h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle  r="30" cy="40" cx="40"></circle>
                        </svg>
                        <div class="number"><p>20%</p></div>
                    </div>

                </div>


            </div>
            <!-- end seling -->

        </div>
        <!-- end insights -->
        <div class="recent_order">
            <h2>Featured Iteam</h2>
            <table>
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Number</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Classic burger meal</td>
                    <td><img src="https://www.kfc.co.il/wp-content/uploads/2022/11/%D7%90%D7%A8%D7%95%D7%97%D7%AA-%D7%A7%D7%9C%D7%90%D7%A1%D7%99%D7%A7-%D7%91%D7%95%D7%A8%D7%92%D7%A8.jpeg"
                       style="height: 40px; " ></td>
                    <td>1</td>
                    <td>41$</td>
                    <td class="warning">active</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>Zinger burger meal</td>
                    <td><img src="https://www.kfc.co.il/wp-content/uploads/2022/11/%D7%90%D7%A8%D7%95%D7%97%D7%AA-%D7%96%D7%99%D7%A0%D7%92%D7%A8-%D7%91%D7%95%D7%A8%D7%92%D7%A8.jpeg
                        "
                             style="height: 40px; " ></td>
                    <td>2</td>
                    <td>41$</td>
                    <td class="warning">active</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>Tower classic/zinger burger meal</td>
                    <td><img src="https://www.kfc.co.il/wp-content/uploads/2022/11/23823_Kiosk_New_Tower_Classic_burger_meal_800x700.webp"
                             style="height: 40px; " ></td>
                    <td>3</td>
                    <td>50%</td>
                    <td class="warning">active</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>Double Tower classic/zinger burger meal</td>
                    <td><img src="https://www.kfc.co.il/wp-content/uploads/2022/11/%D7%90%D7%A8%D7%95%D7%97%D7%AA-%D7%93%D7%90%D7%91%D7%9C-%D7%98%D7%90%D7%95%D7%95%D7%A8.jpeg"
                             style="height: 40px; " ></td>
                    <td>4</td>
                    <td>58$</td>
                    <td class="warning">active</td>
                    <td class="primary">Details</td>
                </tr>
                </tbody>
            </table>
            <a href="menumain.html">Show All</a>
        </div>

    </main>
    <!------------------
       end main
      ------------------->

    <!----------------
      start right main
    ---------------------->
<div class="right">


    <div class="sales-analytics">
        <h2>Dashboard</h2>

        <div class="item onlion">
            <div class="icon">
                <span>Category</span>
            </div>
            <div class="right_text">
                <div class="right_text">
                    <div id="formed">
                        <form action="add_category.php" method="post">

                            <input type="number" placeholder="Enter id" name="id1" />
                            <input type="text" placeholder="Enter Name" name="name1" />
                            <input type="url" placeholder="Enter Image Url" name="image" />
                            <input type="text" placeholder="Description" name="description" />
                            <input type="text" placeholder="Enter Status" name="serves" />

                            <button type="submit" name="add_category">Add Category</button>
                            <button type="submit" name="update_category">Update Category</button>
                            <button type="submit" name="delete_category">Delete Category</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="item onlion">
            <div class="icon">
                <span>iteam</span>
            </div>
            <div class="right_text">
                <div id="formed1">
                    <form action="fooditeam.php" method="post">
                        <input type="text" placeholder="Enter id" id="id2" />
                        <input type="text" placeholder="Enter Name" id="name2" />
                        <input type="text" placeholder="Description" id="desciption2" />
                        <input type="text" placeholder="Enter Price" id="price2" />

                        <input type="text" placeholder="Enter Image Url" id="image2" />

                        <input type="text" placeholder="Enter category_id" id="category_id2" />
                        <input type="text" placeholder="Featured" id="featured2" />



                        <button type="submit" name="add_food">Add iteam</button> <!-- Add the 'name' attribute to the button -->
                        <button type="submit" name="update_category">Update iteam </button>
                        <button type="submit" name="delete_category">Delete iteam</button>



                    </form>
                </div>
            </div>
        </div>
            <div class="item onlion">
                <div class="icon">
                    <span>Users</span>
                </div>
                <div class="right_text">
                    <div id="formed2">
                        <form action="add_users.php" method="post">
                            <input type="number" placeholder="Enter id" name="id" />
                            <input type="text" placeholder="Enter Name" name="name" />
                            <input type="text" placeholder="Enter Username" name="username" />
                            <input type="text" placeholder="Enter Password" name="password" />
                            <input type="text" placeholder="type" name="type" />

                            <button type="submit" name="add_user">Add User</button>
                            <button type="submit" name="update_user">Update User</button>
                            <button type="submit" name="delete_user">Delete User</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


<div class="item add_product">
    <div>
        <p>Copyright ©KFC Rights Reserved</P>
    </div>
</div>
</div>


</div>



</body>
</html>





</body>
</html>