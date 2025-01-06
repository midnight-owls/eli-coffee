<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h1>About Us</h1>
        <i class="uil uil-times form_close" onclick="goHome()"></i>

        <!-- Meet the Team Section -->
        <div class="team">
            <h2 class="text-center mt-4">Meet the Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-photo"></div>
                    <p class="team-name">Kobe</p>
                </div>
                <div class="team-member">
                    <div class="team-photo"></div>
                    <p class="team-name">Jesse</p>
                </div>
                <div class="team-member">
                    <div class="team-photo"></div>
                    <p class="team-name">Raven</p>
                </div>
                <div class="team-member">
                    <div class="team-photo"></div>
                    <p class="team-name">Von</p>
                </div>
                <div class="team-member">
                    <div class="team-photo"></div>
                    <p class="team-name">CD</p>
                </div>
            </div>
        </div>

        <!-- Description Section -->
        <div class="description mt-4">
            <h4>Description</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel nulla arcu.
                Vivamus id pharetra est, ac sagittis magna. Suspendisse potenti. Fusce ac nunc nunc.
                Integer et pharetra nulla. Phasellus in tincidunt lectus.
            </p>
        </div>

        <!-- Reviews Section -->
        <div class="reviews mt-4">
            <div class="reviews-header">
                <span class="review-count">99 Reviews</span>
                <span class="average-rating">4.8 ★★★★☆</span>
            </div>
            <div class="review-list">
                <div class="review">
                    <div class="reviewer-photo"></div>
                    <div class="review-content">
                        <p class="reviewer-name">Cr** ****el</p>
                        <p class="review-rating">★★★★☆</p>
                        <p class="review-date">**/**/**</p>
                    </div>
                </div>
                <div class="review">
                    <div class="reviewer-photo"></div>
                    <div class="review-content">
                        <p class="reviewer-name">Ke**** ****ne</p>
                        <p class="review-rating">★★★★★</p>
                        <p class="review-date">**/**/**</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


<script>
    function goHome() {
        window.history.back();
    }
</script>

<?php include("footer.php"); ?>