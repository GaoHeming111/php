<?php
// mysql 存储引擎
MylSAM存储引擎：单表最大支持数据量2的64次方条记录，每个表最多可以建立64个索引
InnoDB存储引擎：设计遵循ACID模型，支持事务，具有从事务崩溃中恢复的能力，能最大限度的保护用户的数据；
               支持行级锁，可以提升用户多并发时的读写性能
               支持外键，保证数据的一致性和完整性
               拥有自己独立的缓存池，常用的数据和索引都在缓存中 