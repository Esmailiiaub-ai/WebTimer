// SHA256 implementation
#include <stdint.h>

#define SHA256_BLOCK_SIZE 32  // Bytes

typedef struct {
    uint32_t h[8];
    uint64_t count;
    uint8_t buffer[64];
} SHA256_CTX;

void SHA256_Init(SHA256_CTX *ctx);
void SHA256_Update(SHA256_CTX *ctx, const uint8_t *data, size_t len);
void SHA256_Final(uint8_t hash[], SHA256_CTX *ctx);

// Function definitions

void SHA256_Init(SHA256_CTX *ctx) {
    // Initialization code
}

void SHA256_Update(SHA256_CTX *ctx, const uint8_t *data, size_t len) {
    // Update code
}

void SHA256_Final(uint8_t hash[], SHA256_CTX *ctx) {
    // Finalization code
}