<?php

$url = "https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if($response === false){
    die("Curl Error: " . curl_error($ch));
}

curl_close($ch);

$data = json_decode($response, true);

?>

<style>
    body {
        margin: 0;
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
    }

    .menu-container {
        width: 90%;
        max-width: 1200px;
        margin: 60px auto;
    }

    .menu-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .menu-header h1 {
        font-size: 40px;
        margin-bottom: 10px;
        color: #222;
    }

    .menu-header p {
        color: #777;
        font-size: 17px;
    }

    .meals {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
    }

    .meal-card {
        background-color: white;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: 0.3s;
    }

    .meal-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .meal-card img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        display: block;
    }

    .meal-body {
        padding: 22px;
    }

    .meal-body h3 {
        margin: 0 0 12px;
        font-size: 21px;
        color: #222;
    }

    .meal-body p {
        color: #777;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .meal-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .price {
        color: #ffc107;
        font-size: 23px;
        font-weight: bold;
    }

    .order-btn {
        background-color: #ffc107;
        color: #222;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    .order-btn:hover {
        background-color: #222;
        color: white;
    }

    /* Tablet */
    @media (max-width: 900px) {
        .meals {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    /* Mobile */
    @media (max-width: 600px) {
        .meals {
            grid-template-columns: 1fr;
        }

        .menu-header h1 {
            font-size: 30px;
        }
    }
.button{
    border-radius: 10px;
    background-color: yellow;
    text-decoration: none;
    color: black;
    padding: 15px;
}
</style>


<div class="menu-container">

    <div class="menu-header">
        <h1>Our Menu</h1>
        <p>Discover our delicious meals</p>
    </div>


    <div class="meals">

        <?php foreach($data["meals"] as $meal): ?>

            <div class="meal-card">

                <img
                    src="<?= $meal["strMealThumb"] ?>"
                    alt="<?= $meal["strMeal"] ?>"
                >

                <div class="meal-body">

                    <h3>
                        <?= $meal["strMeal"] ?>
                    </h3>

                    <p>
                        Delicious and freshly prepared meal
                        made with fresh ingredients and great taste.
                    </p>

                    <div class="meal-bottom">

                        <span class="price">
                            $150
                        </span>
<a href="details.php?id=<?=$meal['idMeal']?>" class="button"> Order Now</a>
                           
                 

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>