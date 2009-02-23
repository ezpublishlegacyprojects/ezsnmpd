<?php /*

[MIB]

# The base prefix for all the OIDs we answer for.
# Always keeping within within iso.org.dod.internet.private.enterprise (1.3.6.1.4.1) is a good idea
# .eZ Systmes (.35000)
# .eZ Publish (.1)
Prefix=1.3.6.1.4.1.35000.1

# List of php classes delegated to answer GET/SET responses
# each one of those takes care of a list of OIDs, that form the overall eZ Publish MIB
SNMPHandlerClasses[]
SNMPHandlerClasses[]=eZsnmpdSettingsHandler
SNMPHandlerClasses[]=eZsnmpdStatusHandler

/* ?>