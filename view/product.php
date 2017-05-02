
<?php
include_once "../view/header.php";
include_once '../controller/getAllProductDataService.php';
?>
    <div id="product-wrapper">
        <h1><?= $name; ?></h1>

        <div id="picture-wrapper">
            <div id="product-picture">
                <img src="<?php echo $picture; ?>" alt="tv">
            </div>
            <div id="product-fav-and-buy">
                <div>
                    <p> <?= $cena; ?> <span>лв.</span> </p>
<!--                     <p><span>В наличност</span></p> -->
                    <button type="submit" class="add-for-buy" id="<?php echo $productId; ?>">Добави в количката</button>
                    <div class="whishlist-button-holder" data-display-type="default" data-product-id="5499268" data-offer-id="17426062">
                        <button type="button" class="add-to-fav" id="<?php echo $productId; ?>">Добави в Любими</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="specifications">
            <section>
                <h2 class="page-section-title">Спецификации</h2>
                <div class="col-md-12">
                    <table class="table-specifications">
                        <tbody>
                            <tr>
                                <td class="col-xs-4 text-muted">Модел</td>
                                <td class="col-xs-8"><?php echo $model; ?></td>
                            </tr>

                            <?php
//                            echo "<tr>";
                            for ($tr = 0; $tr< count($mod);$tr++){
                              echo "<tr>";
                                for($td=0; $td<count($mod[$tr]); $td++) {

                                    echo"<td class='col-xs-4 text-muted'>".$mod[$tr][$td]."</td>";
//                                    echo"<td class='col-xs-8'>".$mod[$tr][$td]."</td>";
                               }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div>
            <hr>
            <div class="comment_input">
                <form name="form">
                    <input type="text" name="name" id="commName" placeholder="Name..." />
                    <br/>
                    <br/>
                    <textarea name="comments" placeholder="Leave Comments Here..." style="width:635px; height:100px;" id="queryText"></textarea>
                    <br/>
                    <br/>
                    <a href="#" onClick="addNewComM()" class="button">Коментар</a>
                    <br/><br/>
                </form>
            </div>
            <br/>
            <hr><br/>
            <div id="comment_logs">
                Loading comments...
                <div>
                </div>
            </div>
        </div>
        <script src="../assets/js/mesege.js"></script>
    </div>
<?php
include_once "footer.php";
?>
