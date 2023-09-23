<?php
/*
Template Name: Search
*/
?>

<?php get_header(); ?>

<?php
$search_bar_background_image = get_field("search_bar_background_image");

if ($search_bar_background_image) {
    $image_url = $search_bar_background_image['url'];
}



?>

<style>
    .banner-section {
        background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url(<?php echo $image_url ?>);
    }
</style>

<section class="banner-section">
    <div class="container">
        <div class="head-texts">
            <h1>Lorem ipsum dolor sit amet</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis
                error molestias pariatur perspiciatis obcaecati reiciendis modi,
                repellat nam repudiandae ea vero iste sapiente ullam tenetur facere
                aliquid iure facilis. Vitae.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
                laudantium fugiat exercitationem non iste quae alias, doloribus
                libero maiores similique eius sit, et repellendus magnam molestias
                quaerat quam perspiciatis quas?
            </p>
        </div>
        <div class="search-box-container">
            <div class="search-bar">
                <input type="text" id="categoryInput" class="form-control" placeholder="Search...">
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                    width="24">
                    <path
                        d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
                </svg>
            </div>

            <div class="select-container d-none">
                <select class="form-select select-option" size="3" id="categorySelect">

                </select>

            </div>
        </div>
    </div>
</section>

<!--  Result Section     -->


<?php

$category_container = get_field("category_container"); // category Repeater
$results = get_sub_field("results"); // results Repeater

?>

<section class="search-results">
    <div class="container">
        <div class="results-main-container">
            <!--  category one   -->

            <?php
            if ($category_container) {
                foreach ($category_container as $category_item) {



                }
            }

            ?>

            <div class="category-container" data-category="category-one">
                <h1>Computer</h1>
                <div class="result-container">
                    <div class="results">
                        <h2>Result 1</h2>
                        <img src="<?php echo $card_image_url ?>" alt="Result Image" srcset="" />
                        <span>Author: abc abc </span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Mollitia quae sit expedita illo quo aperiam natus assumenda
                            reprehenderit magnam omnis delectus tempora optio beatae quos
                            obcaecati unde, dolorum blanditiis nemo.
                        </p>
                    </div>

                </div>
            </div>

            <!--  category Two   -->

            <div class="category-container" data-category="category-Two">
                <h1>Giraffe</h1>
                <div class="result-container">
                    <div class="results">
                        <h2>Result 4</h2>
                        <img src="<?php echo $card_image_url ?>" alt="Result Image" srcset="" />
                        <span>Author: abc abc </span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Mollitia quae sit expedita illo quo aperiam natus assumenda
                            reprehenderit magnam omnis delectus tempora optio beatae quos
                            obcaecati unde, dolorum blanditiis nemo.
                        </p>
                    </div>
                    <div class="results">
                        <h2>Result 5</h2>
                        <img src="<?php echo $card_image_url ?>" alt="Result Image" srcset="" />
                        <span>Author: abc abc </span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Mollitia quae sit expedita illo quo aperiam natus assumenda
                            reprehenderit magnam omnis delectus tempora optio beatae quos
                            obcaecati unde, dolorum blanditiis nemo.
                        </p>
                    </div>

                    <div class="results">
                        <h2>Result 6</h2>
                        <img src="<?php echo $card_image_url ?>" alt="Result Image" srcset="" />
                        <span>Author: abc abc </span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Mollitia quae sit expedita illo quo aperiam natus assumenda
                            reprehenderit magnam omnis delectus tempora optio beatae quos
                            obcaecati unde, dolorum blanditiis nemo.
                        </p>
                    </div>
                </div>
            </div>


            <!--  category Three   -->

            <div class="category-container" data-category="category-Three">
                <h1>Balloon</h1>
                <div class="result-container">
                    <div class="results">
                        <h2>Result 7</h2>
                        <img src="<?php echo $card_image_url ?>" alt="Result Image" srcset="" />
                        <span>Author: abc abc </span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Mollitia quae sit expedita illo quo aperiam natus assumenda
                            reprehenderit magnam omnis delectus tempora optio beatae quos
                            obcaecati unde, dolorum blanditiis nemo.
                        </p>
                    </div>
                    <div class="results">
                        <h2>Result 8</h2>
                        <img src="<?php echo $card_image_url ?>" alt="Result Image" srcset="" />
                        <span>Author: abc abc </span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Mollitia quae sit expedita illo quo aperiam natus assumenda
                            reprehenderit magnam omnis delectus tempora optio beatae quos
                            obcaecati unde, dolorum blanditiis nemo.
                        </p>
                    </div>
                    <div class="results">
                        <h2>Result 9</h2>
                        <img src="<?php echo $card_image_url ?>" alt="Result Image" srcset="" />
                        <span>Author: abc abc </span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Mollitia quae sit expedita illo quo aperiam natus assumenda
                            reprehenderit magnam omnis delectus tempora optio beatae quos
                            obcaecati unde, dolorum blanditiis nemo.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Category Four  -->

        </div>
    </div>
</section>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Lato&family=Outfit:wght@400;700&family=Poppins:wght@400;500;600;700;800&family=Prata&display=swap");

    * {
        font-family: "Poppins", sans-serif;
    }

    .banner-section {
        width: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: fit-content;
        padding: 11rem;
    }

    .banner-section h1 {
        font-size: 60px;
        margin-bottom: 5rem;
    }

    .banner-section h1,
    p {
        text-align: center;
        color: #fff;
    }

    .search-bar {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 5rem 0 0;
        position: relative;
    }

    .search-box-container {
        display: flex;
        flex-direction: column;
        position: relative;
        max-width: 584px;
        margin: auto;
    }

    .select-container {
        margin-top: 3px;
        position: absolute;
        top: 8rem;
        width: 100%;
    }

    .search-icon {
        position: absolute;
        top: 50%;
        left: 8px;
        transform: translateY(-50%);
        fill: #888;
    }

    input[type="text"] {
        padding-left: 37px;
        height: 50px;
        border-radius: 22px;
    }

    #suggestions li {
        color: #fff;
        margin: 1rem;
    }

    #suggestions {
        list-style: none;
        position: absolute;
        left: 14rem;
        top: 3rem;
    }

    /*     Results      */

    .results img {
        width: 300px;
        border-radius: 20px;
    }

    .results-main-container {
        display: flex;
        flex-wrap: wrap;
        margin-top: 6rem;
        justify-content: center;
    }

    .results {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 20rem;
        border: 2px solid rgba(0, 0, 0, 0.3);
        margin: 1rem;

        border-radius: 22px;
        padding: 1rem;
    }

    .results p {
        color: #000;
        font-size: 14px;

    }

    .results span {
        margin: 20px 0;
    }

    .results h2 {
        font-weight: 600;
    }

    .category-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .result-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .load-more {
        margin: 2rem;
    }
</style>

<script>

    const categorySelect = document.getElementById("categorySelect");
    const categoryDivs = document.querySelectorAll(".category-container");
    const categoryInput = document.getElementById("categoryInput");
    const selectContainer = document.querySelector(".select-container");
    const body = document.body;
    // const loadMoreButton = document.querySelectorAll(".load-more");

    body.addEventListener("click", () => {
        selectContainer.classList.add("d-none");
        selectContainer.classList.remove("d-flex");
    });

    // Adding all options to select element with all avaialble categories

    function populateSelectOptions() {
        categoryDivs.forEach((div) => {
            const category = div.querySelector("h1").innerText;
            const option = document.createElement("option");
            option.value = category;
            option.textContent = category;
            categorySelect.appendChild(option);

            categoryInput.addEventListener("input", (evt) => {
                let inputValue = evt.target.value;
                if (inputValue === option.value) {
                    option.selected = inputValue;
                }
            });

            option.addEventListener("click", (evt) => {
                let newValue = evt.target.value;
                categoryInput.value = newValue;
            });
        });
    }

    populateSelectOptions(); // options Added

    const selectedOptions = Array.from(categorySelect.options).map(
        (option) => option.value
    );

    const loweredSelectedOptions = [
        ...selectedOptions.map((option) => option.toLowerCase()),

    ];

    const filtered = loweredSelectedOptions.includes(categoryInput.value);

    categoryInput.addEventListener("keyup", (evt) => {
        if (!filtered && evt.key === "Enter") {
            console.log("not found");
        } else {
            console.log(filtered);
        }
    });
    // showing the select container when categoryInput value changes

    const categoryOptions = Array.from(categorySelect.options);

    categoryInput.addEventListener("input", () => {
        selectContainer.classList.remove("d-none");
        selectContainer.classList.add("d-flex");

        //  displaying all div when input value is falsy
        if (!categoryInput.value) {
            categoryDivs.forEach((div) => div.classList.remove("d-none"));
        }

        const searchText = categoryInput.value.trim().toLowerCase();

        categorySelect.innerHTML = "";

        // Filter the original options based on the search text
        const filteredOptions = categoryOptions.filter((option) =>
            option.textContent.toLowerCase().includes(searchText)
        );

        // Add the filtered options back to the select element
        filteredOptions.forEach((option) => {
            categorySelect.appendChild(option.cloneNode(true));
        });
    });

    //

    // Event listener for select change
    categorySelect.addEventListener("change", function () {
        const selectedCategory = this.value;

        // Hide all category divs
        categoryDivs.forEach((div) => {
            div.classList.add("d-none");
        });

        // Show the selected category div
        if (selectedCategory) {
            categoryDivs.forEach((div) => {
                const category = div.querySelector("h1").innerText;

                if (selectedCategory === category) {
                    div.classList.remove("d-none");
                    categoryInput.value = selectedCategory;
                }
            });
        }
    });

    categoryDivs.forEach((div, index) => {
        if (index >= 3) {
            div.classList.add("d-none");
        }
    });


    //


</script>
</body>

</html>



<?php
get_footer();
?>