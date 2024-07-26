# # MosaicDefinitionTransactionBodyDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Mosaic identifier. |
**duration** | **string** | Duration expressed in number of blocks. |
**nonce** | **int** | A number that allows uint 32 values. |
**flags** | **int** | - 0x00 (none) - No flags present. - 0x01 (supplyMutable) - Mosaic supports supply changes even when mosaic owner owns partial supply. - 0x02 (transferable) - Mosaic supports transfers between arbitrary accounts. When not set, mosaic can only be transferred to and from mosaic owner. - 0x04 (restrictable) - Mosaic supports custom restrictions configured by mosaic owner. - 0x08 (revokable) - Mosaic allows creator to revoke balances from another user. |
**divisibility** | **int** | Determines up to what decimal place the mosaic can be divided. Divisibility of 3 means that a mosaic can be divided into smallest parts of 0.001 mosaics. The divisibility must be in the range of 0 and 6. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
