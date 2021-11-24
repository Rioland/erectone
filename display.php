<?php
require "app/vendor/autoload.php";
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
$client = new CoinGeckoClient();
// $data = $client->derivatives()->getExchanges();
// $data = $client->simple()->getPrice('0x,bitcoin', 'usd,rub');
// $data = $client->coins()->getList();
$data = $result = $client->coins()->getMarkets('usd');

$response = $client->getLastResponse();
$headers = $response->getHeaders();

// print_r($data['0']['name']);
?>
<br />
<br />
<br />
<br />
<div class="container" id="priceyy">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price(USD)</th>
                <th scope="col">Change(24h)</th>
                <th scope="col">Trade</th>
            </tr>
        </thead>
        <tbody>
            <?php
for ($i = 0; $i <= 5; $i++) {
    $res = $data[$i];
    ?>
            <tr>
                <th scope="row">
                    <img src="<?php echo $res['image']; ?>" alt="btc" srcset="" width="40px" height="40px" />
                    <label class="display" for=""><?php echo $res['name']; ?></label>
                </th>
                <td>
                    <label class="display" id="btcprice">$ <?php echo $res['current_price']; ?> </label>
                </td>
                <td>
                    <label class="display" id="btcperc"><?php echo $res['price_change_percentage_24h']; ?></label>
                </td>
                <td>
                    <button class="w3-button w3-border w3-light-blue w3-round-large w3-hover-blue"
                        id="register">Buy</button>
                </td>
            </tr>


            <?php
}
?>

        </tbody>
    </table>

    <p>
        <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
            aria-controls="collapseExample">
        </a> -->
        <center>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">
                More Coin
            </button>
        </center>

    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price(USD)</th>
                        <th scope="col">Change(24h)</th>
                        <th scope="col">Trade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
for ($i = 0; $i <= 50; $i++) {
    $res = $data[$i];
    ?>
                    <tr>
                        <th scope="row">
                            <img src="<?php echo $res['image']; ?>" alt="btc" srcset="" width="40px" height="40px" />
                            <label class="display" for=""><?php echo $res['name']; ?></label>
                        </th>
                        <td>
                            <label class="display" id="btcprice"> $ <?php echo $res['current_price']; ?> </label>
                        </td>
                        <td>
                            <label class="display"
                                id="btcperc"><?php echo $res['price_change_percentage_24h']; ?></label>
                        </td>
                        <td>
                            <button class="w3-button w3-border w3-light-blue w3-round-large w3-hover-blue"
                                id="register">Buy</button>
                        </td>
                    </tr>


                    <?php
}
?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<br>
<br>





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
   </script> -->

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

</html>