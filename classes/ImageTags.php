<?php
class ImageTags {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function addTag($imageId, $tagName) {
        $sql = "INSERT IGNORE INTO image_tags (image_id, tag_name) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$imageId, strtolower($tagName)]);
    }

    public function getImageTags($imageId) {
        $sql = "SELECT tag_name FROM image_tags WHERE image_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$imageId]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}