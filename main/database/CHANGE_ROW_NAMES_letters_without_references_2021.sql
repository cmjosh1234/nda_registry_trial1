ALTER TABLE `letters_without_reference_2021` CHANGE `LETTER REF` `LETTER_REF` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL;

ALTER TABLE `letters_without_reference_2021` CHANGE `ADDRESSED TO` `ADDRESSED_TO` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL;

ALTER TABLE `letters_without_reference_2021` CHANGE `DATE OF LETTER` `DATE_OF_LETTER` DATETIME CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL;

ALTER TABLE `letters_without_reference_2021` CHANGE `DATE RECIEVED` `DATE_RECIEVED` DATETIME CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL;

ALTER TABLE `letters_without_reference_2021` CHANGE `DATE DELIVERED` `DATE_DELIVERED` DATETIME CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL;

ALTER TABLE `letters_without_reference_2021` CHANGE `FILE NAME` `FILE_NAME` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL;

ALTER TABLE `letters_without_reference_2021` CHANGE `FILE NO` `FILE_NO` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL;

ALTER TABLE `letters_without_reference_2021` CHANGE `BOX NO` `BOX_NO` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL;