docker compose -f docker-compose.yaml -f docker-compose.dev.yaml --env-file ./app/.env.local up "$@"