/* $Id$ */
/* Copyright (c) 2012 Pierre Pronchery <khorben@defora.org> */
/* This file is part of Herma */



/* remove any potential existing data */
DROP TABLE herma_sensor;

/* declare the Herma module (should automatically fail if already declared) */
INSERT INTO daportal_module (name, enabled) VALUES ('herma', '1');

BEGIN TRANSACTION;

CREATE TABLE herma_sensor (
	sensor_id INTEGER NOT NULL,
	/* insert extra attributes here */
	FOREIGN KEY (sensor_id) REFERENCES daportal_content (content_id)
);

COMMIT;
