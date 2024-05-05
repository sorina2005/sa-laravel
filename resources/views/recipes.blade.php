@include('shared.header')

<section id="food">
    <div class="card card-food-list">
        <h1 class="text-center" style="padding-top:6rem;"><strong>Food Lists</strong></h1>
        <div class="mt-4">
            <div class="row">
                <div class="col-md-2 mr-auto">
                    <button type="button" class="btn btn-add-food btn-secondary" data-toggle="modal" data-target="#addRecipeModal">Add Recipe</button>
                </div>
                <div class="col-md-2">
                    <input class="form-control p-4" type="text" id="searchInput" placeholder="Search...">
                </div>
            </div>
        </div>


        <table id="foodListTable" class="table table-responsive mt-4" style="text-align:center;">
            <thead>
            <tr>
                <th scope="col" style="width: 5%;">Food ID</th>
                <th scope="col" style="width: 10%;">Recipe Image</th>
                <th scope="col" style="width: 10%;">Recipe Name</th>
                <th scope="col" style="width: 10%;">Category</th>
                <th scope="col" style="width: 10%;">Action</th>
            </tr>
            </thead>
{{--            <tbody>--}}

{{--            <?php--}}

{{--            $stmt = $conn->prepare("--}}
{{--                        SELECT * --}}
{{--                        FROM --}}
{{--                            tbl_recipe--}}
{{--                        LEFT JOIN--}}
{{--                            tbl_category ON--}}
{{--                            tbl_recipe.tbl_category_id = tbl_category.tbl_category_id --}}
{{--                        ");--}}
{{--            $stmt->execute();--}}

{{--            $result = $stmt->fetchAll();--}}

{{--            foreach ($result as $row) {--}}
{{--                $recipeID = $row['tbl_recipe_id'];--}}
{{--                $categoryID = $row['tbl_category_id'];--}}
{{--                $categoryName = $row['category_name'];--}}
{{--                $recipeImage = $row['recipe_image'];--}}
{{--                $recipeName = $row['recipe_name'];--}}
{{--                $recipeIngredients = $row['recipe_ingredients'];--}}
{{--                $recipeProcedure = $row['recipe_procedure'];--}}
{{--                ?>--}}

{{--            <tr>--}}
{{--                <th id="recipeID-<?= $recipeID ?>"><?php echo $recipeID ?></th>--}}
{{--                <td id="recipeImage-<?= $recipeID ?>"><img src="../images/bbq-chicken-salad.jpg" class="img-fluid" style="height: 50px; width: 90px" alt="Recipe Image"></td>--}}
{{--                <td id="recipeName-<?= $recipeID ?>"><?php echo $recipeName ?></td>--}}
{{--                <td id="categoryName-<?= $recipeID ?>"><?php echo $categoryName ?></td>--}}
{{--                <td id="recipeIngredients-<?= $recipeID ?>" hidden><?php echo $recipeIngredients ?></td>--}}
{{--                <td id="recipeProcedure-<?= $recipeID ?>" hidden><?php echo $recipeProcedure ?></td>--}}

{{--                <td>--}}
{{--                    <button type="button" onclick="view_recipe('<?php echo $recipeID ?>')" title="View"><i class="fa-solid fa-list p-1"></i></button>--}}
{{--                    <button type="button" onclick="update_recipe('<?php echo $recipeID ?>')" title="Edit"><i class="fa-solid fa-pencil p-1"></i></button>--}}
{{--                    <button type="button" onclick="delete_recipe('<?php echo $recipeID ?>')" title="Delete"><i class="fa-solid fa-trash p-1"></i></button>--}}
{{--                </td>--}}
{{--            </tr>--}}

{{--                <?php--}}
{{--            }--}}
{{--            ?>--}}

            </tbody>
        </table>
    </div>

</section>

<br>
<br>

@include('shared.footer')
