<?php
    class CommentModel{
        function select_all_comments() {
            $sql = "
                SELECT
                    products.name AS product_name,
                    users.full_name,
                    users.image AS user_image,
                    comments.comment_id,
                    comments.content,
                    comments.date AS comment_date,
                    comments.status
                FROM
                    comments
                JOIN
                    users ON comments.user_id = users.user_id
                JOIN
                    products ON comments.product_id = products.product_id
                ORDER BY comments.comment_id DESC;
            ";

            return pdo_query($sql);
        }

        function select_comment_by_id($comment_id) {
            $sql = "
                SELECT
                    products.name AS product_name,
                    users.full_name,
                    users.image AS user_image,
                    comments.comment_id,
                    comments.content,
                    comments.date AS comment_date,
                    comments.status
                FROM
                    comments
                JOIN
                    users ON comments.user_id = users.user_id
                JOIN
                    products ON comments.product_id = products.product_id
                WHERE comments.comment_id = ?;
            ";

            return pdo_query_one($sql, $comment_id);
        }


    }

    $CommentModel = new CommentModel();
?>