CREATE TABLE IF NOT EXISTS `site_param` (
    `id` INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL UNIQUE,
    -- type
    -- 1 text
    -- 2 date
    -- 3 number
    -- 4 boolean
    -- 5 multiline
    -- 6 url
    -- 7 email
    -- 8 color
    `type` TINYINT DEFAULT 1,
    `group` VARCHAR(50),
    `value` TEXT,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);