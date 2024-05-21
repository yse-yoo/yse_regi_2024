```mermaid
erDiagram
    SALES {
        bigint id PK "Primary Key, Auto Increment"
        int price "Not Null"
        datetime created_at "Not Null, Default: CURRENT_TIMESTAMP"
        datetime updated_at "Not Null, Default: CURRENT_TIMESTAMP"
    }
```